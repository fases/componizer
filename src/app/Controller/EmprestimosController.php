<?php

class EmprestimosController extends AppController {

    public $helpers = array('Html', 'Form', 'Js' => array('jquery'));
    public $name = 'Emprestimos';
    public $components = array('RequestHandler', 'Paginator');
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Emprestimo.id' => 'asc'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    public function index() {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Emprestimo->recursive = 0;
        $this->set('emprestimos', $this->paginate());
        //$this->set('requisicoes',$this->Requisicao->find());
    }

    public function view($id) {
        $this->Emprestimo->id = $id;
        if (!$this->Emprestimo->exists()) {
            $this->Session->setFlash('Solicitação inexistente!', 'error');
            if($this->Session->read($user('id')) == 0){
                return $this->redirect(array('action' => 'index'));
            }
            return $this->redirect(array('action' => 'profile'));
        }
        $this->set('emprestimos', $this->Emprestimo->findById($id));
    }

    public function add() {
        if ($this->Auth->user('role') < 3) {
            $this->set('user', $this->Emprestimo->User->find('list', array('conditions' => array('User.id' => $this->Auth->user('id')), 'fields' => array('User.id', 'User.nome'))));
        } else {
            $this->set('user', $this->Emprestimo->User->find('list', array('fields' => array('User.id', 'User.nome'))));
        }
        $this->set('laboratorio', $this->Emprestimo->Laboratorio->find('list', array('fields' => array('Laboratorio.id', 'Laboratorio.nome'))));
        if ($this->request->is('post')) {
            $this->Emprestimo->create();
            $this->request->data['Emprestimo']['data_emprestimo'] = date("Y-m-d"); // seta Requisição com estado Aberta
            $this->request->data['Emprestimo']['estado'] = 0; // seta Requisição com estado Aberta
            $this->request->data['Emprestimo']['notificar'] = 0; // seta Marcador notificar como 'sem'
            // if (!in_array('Notification',array_keys($this->request->data))) {
            //   $this->Session->setFlash('Não existem componentes nessa solicitação!','error');
            // }else{
            if ($this->Emprestimo->save($this->request->data['Emprestimo'])) {
                $this->Session->write('Emprestimo_id', $this->Emprestimo->id);
                $this->Session->setFlash('A Solicitação foi salva! Agora insira os componentes desejados', 'success');
                return $this->redirect(array('controller' => 'notifications', 'action' => 'add'));
            }
            $this->Session->setFlash('A Solicitação não foi salva!', 'error');
        }
    }

    public function edit($id = null) {
        $this->Emprestimo->id = $id;
        if (!$this->Emprestimo->exists()) {
            $this->Session->setFlash('Solicitação inexistente!', 'error');
            if($this->Session->read($user('id')) == 0){
                return $this->redirect(array('action' => 'index'));
            }
            return $this->redirect(array('action' => 'profile'));
        }
        $user_id = $this->Emprestimo->find('first', array('conditions' => array('Emprestimo.id' => $id)));
        $this->set('user', $this->Emprestimo->User->find('list', array('conditions' => array('User.id' => $user_id['Emprestimo']['user_id']),
                    'fields' => array('User.id', 'User.nome'))));
        $laboratorio_id = $this->Emprestimo->find('first', array('conditions' => array('Emprestimo.id' => $id)));
        $this->set('laboratorio', $this->Emprestimo->Laboratorio->find('list', array('conditions' => array('Laboratorio.id' => $laboratorio_id['Laboratorio']['id']),
                    'fields' => array('Laboratorio.id', 'Laboratorio.nome'))));
        if ($this->request->is('get')) {
            $this->request->data = $this->Emprestimo->read();
        } else {
            if ($this->Emprestimo->save($this->request->data)) {
                $this->Session->setFlash('A Solicitação foi editada!', 'success');
                return $this->redirect(array('action' => 'profile'));
            }
            $this->Session->setFlash('A Solicitação não foi editada!', 'error');
        }
    }

    public function notify($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Emprestimo->id = $id;
        if (!$this->Emprestimo->exists()) {
            $this->Session->setFlash('Solicitação inexistente!', 'error');
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Emprestimo->read();
        } else {
            if ($this->Emprestimo->save($this->request->data)) {
                $this->Session->setFlash('A Solicitação foi alterada!', 'success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('A Solicitação não foi alterada!', 'error');
        }
    }
    //SELECT c.nome,sum(n.quantidade) FROM notifications as n inner join componentes as c on (n.componente_id = c.id) group by emprestimo_id
    public function end($id = null) {
        $this->Emprestimo->id = $id;
        if (!$this->Emprestimo->exists()) {
            $this->Session->setFlash('Solicitação inexistente!', 'error');
            return $this->redirect(array('action' => 'index'));
        }
        //Buscar nomes dos componentes por inner join
        $valor = $this->Emprestimo->find('all', array('joins' => array(
                array('table' => 'notifications',
                    'alias' => 'Notification',
                    'type' => 'INNER',
                    'conditions' => array('Notification.emprestimo_id = Emprestimo.id')),
                array('table' => 'componentes',
                    'alias' => 'Componente',
                    'type' => 'INNER',
                    'conditions' => array('Notification.componente_id = Componente.id'))
            ),
            'conditions' => array('Notification.emprestimo_id' => $id),
            'fields' => array('Componente.id', 'Notification.quantidade', 'Componente.nome')));
        //Verificar os itens no carrinho
        if (empty($valor)) {
            $this->Session->setFlash('A Requisição não possui componentes', 'error');
            return $this->redirect(array('controller' => 'emprestimos', 'action' => 'profile'));
        }
        //Enviar campos buscador para view
        $this->set('campos', $valor);
        if ($this->request->is('get')) {
            $this->request->data = $this->Emprestimo->findById($id);
        }
        if ($this->request->is('post')) {
            $this->loadModel('Componente');
            //Decrementar valores para cada componente
            foreach ($this->request->data['Componente'] as $key => $value) {
                $componente_id = $this->request->data['Componente'][$key]['id'];
                $valor = $this->Componente->find('first', array('conditions' => array(
                        'Componente.id' => $componente_id)
                    , 'fields' => array('Componente.quantidade')));

                $quantidade = $valor['Componente']['quantidade'];
                $valor = $this->request->data['Componente'][$key]['quantidade'];
                if ($valor > 0 && $quantidade >= $valor) {
                    $resultado = $quantidade - $valor;
                    $this->Componente->updateAll(array('Componente.quantidade' => $resultado), array('Componente.id' => $componente_id));
                    // query("UPDATE componentes SET quantidade = '$resultado' WHERE id = '$componente_id'");
                }
            }
            $this->Emprestimo->saveField('estado', 1);
            $this->Session->setFlash('O Estoque foi Atualizado', 'success');
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function delete($id) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Emprestimo->delete($id)) {
            $this->Session->setFlash('A requisição de Id: ' . $id . ' foi deletada.', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function profile() {
        $this->Emprestimo->recursive = 0;
        $this->set('emprestimos', $this->paginate());
        $this->set('emprestimos', $this->Emprestimo->find('all', array('conditions' => array('Emprestimo.user_id' => $this->Auth->user('id')))));
    }

    public function lista($id = null) {
        $this->Emprestimo->id = $id;
        if (!$this->Emprestimo->exists()) {
            $this->Session->setFlash('Solicitação inexistente!', 'error');
            return $this->redirect(array('action' => 'index'));
        }
        $valor = $this->Emprestimo->find('all', array('joins' => array(
                array('table' => 'notifications',
                    'alias' => 'Notification',
                    'type' => 'INNER',
                    'conditions' => array('Notification.emprestimo_id = Emprestimo.id')),
                array('table' => 'componentes',
                    'alias' => 'Componente',
                    'type' => 'INNER',
                    'conditions' => array('Notification.componente_id = Componente.id'))
            ),
            'conditions' => array('Notification.emprestimo_id' => $id),
            'fields' => array('Notification.quantidade', 'Componente.nome', 'Componente.id')));
        $this->set('campos', $valor);
        $this->set('emprestimo', $id);
    }

}

?>

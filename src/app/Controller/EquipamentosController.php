<?php

class EquipamentosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Equipamentos';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Equipamento.id' => 'asc'
        )
    );
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    public function index() {
        if($this->Auth->user('role') <= 2){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Paginator->settings = array(
            'conditions' => array('Equipamento.situacao' => '0'),
            'limit' => 25,
            'order' => array(
            'Equipamento.id' => 'asc'
        )
        );
        $this->set('equipamentos', $this->Paginator->paginate());
    }

    public function repaired() {
        if($this->Auth->user('role') <= 2){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Paginator->settings = array(
            'conditions' => array('Equipamento.situacao' => '1'),
            'limit' => 25,
            'order' => array(
            'Equipamento.id' => 'asc'
        )
        );
        $this->set('equipamentos', $this->Paginator->paginate());
    }

    public function add() {
        $this->set('laboratorio', $this->Equipamento->Laboratorio->find('list', array('fields' => array('Laboratorio.id', 'Laboratorio.nome'))));
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect($this->referer());
        }
        if ($this->request->is('post')) {
            $this->Equipamento->create();
            $this->request->data['Equipamento']['situacao'] = 0;
            if ($this->Equipamento->save($this->request->data)) {
                $this->Session->setFlash('A Notificação do Equipamento foi salva!', 'success');
                return $this->redirect($this->referer());
            }
            $this->Session->setFlash('A Notificação do Equipamento não foi salva!', 'error');
        }
    }

    public function edit($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect($this->referer());
        }
        $this->Equipamento->id = $id;
        if (!$this->Equipamento->exists()) {
            $this->Session->setFlash("O alerta do equipamento é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $equipamento = $this->Equipamento->find('first',array('conditions' => array('Equipamento.id' => $id)));
            $this->set('laboratorio',$this->Equipamento->Laboratorio->find('list',array('conditions' => 
                array('Laboratorio.id' => $equipamento['Equipamento']['laboratorio_id']),'fields' => array('Laboratorio.id','Laboratorio.nome'))));
            $this->request->data = $this->Equipamento->read();
        } else {
            if ($this->Equipamento->save($this->request->data)) {
                $this->Session->setFlash('O alerta do equipamento foi editado!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function view($id) {
        $this->Equipamento->id = $id;
        if (!$this->Equipamento->exists()) {
            $this->Session->setFlash("O alerta do equipamento escolhido é inválido!", 'error');
            $this->redirect($this->referer());
        }
        $this->set('equipamento', $this->Equipamento->findById($id));
    }

    function delete($id) {
        $this->Equipamento->id = $id;
        if (!$this->Equipamento->exists()) {
            $this->Session->setFlash("O alerta do equipamento escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Equipamento->delete($id)) {
            $this->Session->setFlash('O alerta do equipamento foi deletado!', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function consert($id = null){
        $this->Equipamento->id = $id;
        if (!$this->Equipamento->exists()) {
            $this->Session->setFlash("O alerta do equipamento escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Equipamento->saveField('situacao',1)) {
            $this->Session->setFlash('A equipamento foi marcado como consertado!', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>

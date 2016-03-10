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
        $this->Equipamento->recursive = 0;
        $this->set('equipamentos', $this->paginate());
    }

    public function add() {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        if ($this->request->is('post')) {
            $this->Equipamento->create();
            $this->request->data['Equipamento']['situacao'] = 0;
            if ($this->Equipamento->save($this->request->data)) {
                $this->Session->setFlash('A Notificação dos Equipamentos foi salva!', 'success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('A Equipamento não foi salva!', 'error');
        }
    }

    public function edit($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Equipamento->id = $id;
        if (!$this->Equipamento->exists()) {
            $this->Session->setFlash("A Equipamento é inválida!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Equipamento->read();
        } else {
            if ($this->Equipamento->save($this->request->data)) {
                $this->Session->setFlash('A Equipamento foi editada!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function view($id) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->set('categories', $this->Equipamento->findById($id));
    }

    function delete($id) {
        $this->Equipamento->id = $id;
        if (!$this->Equipamento->exists()) {
            $this->Session->setFlash("A Equipamento escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Equipamento->delete($id)) {
            $this->Session->setFlash('A equipamento foi deletada!', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>

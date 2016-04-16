<?php

class PedidosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Pedidos';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Pedido.id' => 'asc'
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
        $this->Pedido->recursive = 0;
        $this->set('pedidos', $this->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Pedido->create();
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash('A sugestão foi salva!', 'success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('A sugestão não foi salva!', 'error');
        }
    }

    public function edit($id = null) {
        if($this->Auth->user('role') != 1 && $this->Auth->user('role') != 3){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists()) {
            $this->Session->setFlash("A sugestão é inválida!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Pedido->read();
        } else {
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash('A sugestão foi editada!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function view($id) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->set('pedidos', $this->Pedido->findById($id));
    }

    function delete($id) {
        if($this->Auth->user('role') != 1 && $this->Auth->user('role') != 3){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect($this->referer());
        }
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists()) {
            $this->Session->setFlash("A sugestão escolhida é inválida!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Pedido->delete($id)) {
            $this->Session->setFlash('A sugestão foi deletada!', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    function search() {
        if ($this->request->is('post')) {
            $pedido = $this->paginate('Pedido', array('Pedido.nome LIKE' => '%' . $this->request->data['Pedido']['pedaco_nome'] . '%'));
        } else {
            $pedido = $this->paginate('Pedido');
        }
        $this->set('pedidos', $pedido);
    }

}

?>

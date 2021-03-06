<?php

class CategoriasController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Categorias';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Categoria.id' => 'asc'
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
        $this->Categoria->recursive = 0;
        $this->set('categories', $this->paginate());
    }

    public function add() {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        if ($this->request->is('post')) {
            $this->Categoria->create();
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash('A Categoria foi salva!', 'success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('A Categoria não foi salva!', 'error');
        }
    }

    public function edit($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            $this->Session->setFlash("A Categoria é inválida!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Categoria->read();
        } else {
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash('A Categoria foi editada!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function view($id) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->set('categories', $this->Categoria->findById($id));
    }

    function delete($id) {
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            $this->Session->setFlash("A Categoria escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Categoria->delete($id)) {
            $this->Session->setFlash('A categoria foi deletada!', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    function search() {
        if ($this->request->is('post')) {
            $categoria = $this->paginate('Categoria', array('Categoria.nome LIKE' => '%' . $this->request->data['Categoria']['pedaco_nome'] . '%'));
        } else {
            $categoria = $this->paginate('Categoria');
        }
        $this->set('categorias', $categoria);
    }

}

?>

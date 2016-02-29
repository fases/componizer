<?php

class SubcategoriasController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Subcategorias';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Subcategoria.id' => 'asc'
        )
    );
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    public function index() {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Subcategoria->recursive = 0;
        $this->set('subcategories', $this->paginate());
    }

    public function view($id) {
        $this->set('subcategories', $this->Subcategoria->findById($id));
    }

    public function add($categoria_id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        if (is_null($categoria_id)) {
            $this->set('categories', $this->Subcategoria->Categoria->find('list', array('fields' => array('Categoria.id', 'Categoria.nome'))));
        } else {
            $this->set('categories', $this->Subcategoria->Categoria->find('list', array('conditions' => array('Categoria.id' => $categoria_id), 'fields' => array('Categoria.id', 'Categoria.nome'))));
        }
        if ($this->request->is('post')) {
            $this->Subcategoria->create();
            if ($this->Subcategoria->save($this->request->data)) {
                $this->Session->setFlash('A Sub-Categoria foi salva!', 'success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('A Sub-Categoria não foi salva!', 'error');
        }
    }

    public function edit($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Subcategoria->id = $id;
        if (!$this->Subcategoria->exists()) {
            $this->Session->setFlash("A Subcategoria escolhida é inválida!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('categories', $this->Subcategoria->Categoria->find('list', array('fields' => array('Categoria.id', 'Categoria.nome'))));
        if ($this->request->is('get')) {
            $this->request->data = $this->Subcategoria->read();
        } else {
            if ($this->Subcategoria->save($this->request->data)) {
                $this->Session->setFlash('A Sub-Categoria foi editada!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        $this->Subcategoria->id = $id;
        if (!$this->Subcategoria->exists()) {
            $this->Session->setFlash("A Subcategoria escolhida é inválida!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Subcategoria->delete($id)) {
            $this->Session->setFlash('A categoria de Id: ' . $id . ' foi deletada.', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    function search() {
        if ($this->request->is('post')) {
            $subcategoria = $this->paginate('Subcategoria', array('Subcategoria.nome LIKE' => '%' . $this->request->data['Subcategoria']['pedaco_nome'] . '%'));
        } else {
            $subcategoria = $this->paginate('Subcategoria');
        }
        $this->set('subcategorias', $subcategoria);
    }

}

?>

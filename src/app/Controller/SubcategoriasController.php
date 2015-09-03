<?php
    class SubcategoriasController extends AppController {
        public $helpers = array('Html','Form');
        public $name = 'Subcategorias';

        public function index() {
          $this->set('subcategories',$this->Subcategoria->find('all'));
        }

        public function add () {
          $this->set('categories',$this->Subcategoria->Categoria->find('list',array('fields' => array('Categoria.id','Categoria.nome'))));
		      if ($this->request->is('post')) {
			      $this->Subcategoria->create();
            $this->set('list_data',$this->Subcategoria->Categoria->find('list',array('field' => array('Categoria.id','Categoria.nome'))));
			        if ($this->Subcategoria->save($this->request->data)) {
				          $this->Session->setFlash(__('A Sub-Categoria foi salva!'));
				          return $this->redirect(array('action' => 'index'));
			        }
            $this->Session->setFlash(__('A Sub-Categoria não foi salva!'));
		      }
		    }

      public function edit($id = null) {
        $this->Subcategoria->id = $id;
        $this->set('categories',$this->Subcategoria->Categoria->find('list',array('fields' => array('Categoria.id','Categoria.nome'))));
			  if ($this->request->is('get')) {
				      $this->request->data = $this->Subcategoria->read();
			  } else {
				 if ($this->Subcategoria->save($this->request->data)) {
					     $this->Session->setFlash('A Sub-Categoria foi editada!');
					     $this->redirect(array('action' => 'index'));
				 }
			  }
		 }

		 public function delete($id) {
       if (!$this->request->is('get')) {
          throw new MethodNotAllowedException();
        }
			  if ($this->Categoria->delete($id)) {
				      $this->Session->setFlash('A categoria de Id: ' . $id . ' foi deletada.');
				      $this->redirect(array('action' => 'index'));
			  }
		 }
    }
?>

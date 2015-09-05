<?php
  class CategoriasController extends AppController {
    public $helpers = array('Html','Form');
    public $name = 'Categorias';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Categoria.id' => 'asc'
        )
    );

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('add','edit','view','delete');
    }

    public function index() {
      $this->set('categories',$this->Categoria->find('all'));
    }

    public function add() {
		  if ($this->request->is('post')) {
      	  $this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
			    $this->Session->setFlash('A categoria foi salva!');
			    return $this->redirect(array('action' => 'index'));
			}
          $this->Session->setFlash('A categoria não foi salva!.');
		  }
		}

    public function edit($id = null) {
      $this->Categoria->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Categoria->read();
			} else {
				if ($this->Categoria->save($this->request->data)) {
					$this->Session->setFlash('A categoria foi editada!');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

    public function view($id) {
        $this->set('categories', $this->Categoria->findById($id));
    }
    function delete($id) {
      if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
      }
			if ($this->Categoria->delete($id)) {
				$this->Session->setFlash('A categoria foi deletada.');
				$this->redirect(array('action' => 'index'));
			}
		}
  }
?>

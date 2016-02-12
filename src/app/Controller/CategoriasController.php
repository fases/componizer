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
      public $components = array('Paginator');

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('view', 'add','edit','delete');
    }

    public function index() {
      $this->Categoria->recursive = 0;
        $this->set('categories', $this->paginate());
    }

    public function add() {
		  if ($this->request->is('post')) {
      	  $this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
			    $this->Session->setFlash('A Categoria foi salva!','success');
			    return $this->redirect(array('action' => 'index'));
			}
          $this->Session->setFlash('A Categoria não foi salva!','error');
		  }
		}

    public function edit($id = null) {
      $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            $this->Session->setFlash("A Categoria é inválida!",'error');
            $this->redirect(array('action' => 'index'));
        }
			if ($this->request->is('get')) {
				$this->request->data = $this->Categoria->read();
			} else {
				if ($this->Categoria->save($this->request->data)) {
					$this->Session->setFlash('A Categoria foi editada!','success');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

    public function view($id) {
        $this->set('categories', $this->Categoria->findById($id));
    }

    function delete($id) {
      $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            $this->Session->setFlash("A Categoria escolhido é inválido!",'error');
            $this->redirect(array('action' => 'index'));
        }
      if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
      }
			if ($this->Categoria->delete($id)) {
				$this->Session->setFlash('A categoria foi deletada!','success');
				$this->redirect(array('action' => 'index'));
			}
		}
   function search(){
       if ($this->request->is('post')) {
         $categoria = $this->paginate('Categoria', array('Categoria.nome LIKE' => '%'.$this->request->data['Categoria']['pedaco_nome'].'%'));
       } else {
         $categoria = $this->paginate('Categoria');
       }
       $this->set('categorias', $categoria);
     }
 }
?>

<?php
class PlanosController extends AppController{
    public $helpers = array('Html', 'Form');
    public $name = 'Planos';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'User.id' => 'asc'
        )
    );

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('add');
    }

    public function index(){
      $this->set("planos",$this->Plano->find('all'));
    }

    public function view($id){
      $this->set('planos', $this->Plano->findById($id));
    }

    public function edit($id = null){
      $this->Plano->id = $id;
      if ($this->request->is('get')) {
        $this->request->data = $this->Plano->read();
      } else {
        if ($this->Plano->save($this->request->data)) {
          $this->Session->setFlash('O plano de aula foi editado!');
          $this->redirect(array('action' => 'index'));
        }
      }
    }

    public function add(){
      if ($this->request->is('post')) {
      	  $this->Plano->create();
			if ($this->Plano->save($this->request->data)) {
			    $this->Session->setFlash('O plano de aula foi salvo!');
			    return $this->redirect(array('action' => 'index'));
			}
          $this->Session->setFlash('O plano de aula não foi salvo!.');
		  }
    }

    public function delete(){
      if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
      }
			if ($this->Plano->delete($id)) {
				$this->Session->setFlash('O Plano de Aula foi deletado.');
				$this->redirect(array('action' => 'index'));
			}
    }
}
?>

<?php
  class LaboratoriosController extends AppController {
    public $helpers = array('Html','Form');
    public $name = 'Laboratorios';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Laboratorio.id' => 'asc'
        )
    );

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('add','view','edit','delete');
    }
    public function index(){
      $this->set('laboratorios',$this->Laboratorio->find('all'));
    }
    public function add () {
		  if ($this->request->is('post')) {
			  $this->Laboratorio->create();
			  if ($this->Laboratorio->save($this->request->data)) {
			     $this->Session->setFlash(__('O Laboratório foi cadastrado!'));
			     return $this->redirect(array('action' => 'index'));
			   }
        $this->Session->setFlash(__('O laboratório não foi cadastrado!'));
		  }
		}
    public function delete($id) {
      if (!$this->request->is('get')) {
        throw new MethodNotAllowedException();
      }
      if ($this->Laboratorio->delete($id)) {
        $this->Session->setFlash('O laboratório de Id: ' . $id . ' foi excluido.');
        $this->redirect(array('action' => 'index'));
      }
    }
    public function edit($id = null){
      $this->Laboratorio->id = $id;
      if (!$this->Laboratorio->exists()) {
           $this->Session->setFlash("O laboratório escolhido é inválido!");
           $this->redirect(array('action' => 'index'));
      }
      if($this->request->is('get')){
        $this->request->data = $this->Laboratorio->findById($id);
      }else{
        if($this->Laboratorio->save($this->request->data)){
            $this->Session->setFlash('A edição foi realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
          }
        }
      }
  }
?>

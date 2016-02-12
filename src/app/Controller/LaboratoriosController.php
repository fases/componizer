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
    public $components = array('Paginator');

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('add','view','edit','delete');
    }
    public function index(){
      $this->Laboratorio->recursive = 0;
      $this->set('laboratorios',$this->Paginate());
    }
    public function view($id) {
      $this->set('laboratorios',$this->Laboratorio->findById($id));
    }
    public function add () {
		  if ($this->request->is('post')) {
			  $this->Laboratorio->create();
			  if ($this->Laboratorio->save($this->request->data)) {
			     $this->Session->setFlash('O Laboratório foi cadastrado!','success');
			     return $this->redirect(array('action' => 'index'));
			   }
        $this->Session->setFlash('O laboratório não foi cadastrado!','error');
		  }
		}
    public function delete($id) {
      if (!$this->request->is('get')) {
        throw new MethodNotAllowedException();
      }
      if ($this->Laboratorio->delete($id)) {
        $this->Session->setFlash('O laboratório de Id: ' . $id . ' foi excluido.','success');
        $this->redirect(array('action' => 'index'));
      }
    }
    public function edit($id = null){
      $this->Laboratorio->id = $id;
      if (!$this->Laboratorio->exists()) {
           $this->Session->setFlash("O laboratório escolhido é inválido!",'error');
           $this->redirect(array('action' => 'index'));
      }
      if($this->request->is('get')){
        $this->request->data = $this->Laboratorio->findById($id);
      }else{
        if($this->Laboratorio->save($this->request->data)){
            $this->Session->setFlash('A edição foi realizada com sucesso!','success');
            $this->redirect(array('action' => 'index'));
          }
        }
      }
      function search(){
          if ($this->request->is('post')) {
            $valor = $this->paginate('Laboratorio', array('Laboratorio.nome LIKE' => '%'.$this->request->data['Laboratorio']['pedaco_nome'].'%'));
          } else {
            $valor = $this->paginate('Laboratorio');
          }
          $this->set('laboratorios', $valor);
        }
    }
?>

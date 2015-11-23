<?php
class EmprestimosController extends AppController{
 public $helpers = array('Html', 'Form');
    public $name = 'Emprestimos';

    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'emprestimos.id' => 'asc'
        )
    );
    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('index','add','edit','delete');
    }

    public function index(){
      $this->Emprestimo->recursive = 0;
      $this->set('emprestimos', $this->paginate());
      //$this->set('requisicoes',$this->Requisicao->find());
    }
    public function view($id) {
      $this->set('emprestimos',$this->Emprestimo->findById($id));
    }

    public function add($username_id = null, $nome_id = null){
      $this->set('user',$this->Emprestimo->User->find('list',array('fields' => array('User.id','User.nome'))));
      $this->set('laboratorio',$this->Emprestimo->Laboratorio->find('list',array('fields' => array('Laboratorio.id','Laboratorio.nome'))));
      
      if ($this->request->is('post')) {
        $this->Emprestimo->create();
        if ($this->Emprestimo->save($this->request->data)) {
           $this->Session->setFlash(__('A requisição foi salva!'));
           return $this->redirect(array('action' => 'index'));
         }
        $this->Session->setFlash(__('A requisição não foi salva!'));
      }
    }

    public function edit($id = null) {
      $this->Emprestimo->id = $id;
      $this->set('user',$this->Emprestimo->User->find('list',array('fields' => array('User.id','User.nome'))));
		  $this->set('laboratorio',$this->Emprestimo->Laboratorio->find('list',array('fields' => array('Laboratorio.id','Laboratorio.nome'))));
      if ($this->request->is('get')) {
		      $this->request->data = $this->Emprestimo->read();
		  } else {
				 if ($this->Emprestimo->save($this->request->data)) {
					     $this->Session->setFlash('A requisição foi editada!');
					     $this->redirect(array('action' => 'index'));
				 }
		  }
	 }
   public function delete($id) {
     if (!$this->request->is('get')) {
       throw new MethodNotAllowedException();
     }
    if ($this->Emprestimo->delete($id)) {
      $this->Session->setFlash('A requisição de Id: ' . $id . ' foi deletada.');
      $this->redirect(array('action' => 'index'));
    }
  }
  }
?>

<?php
class EmprestimosController extends AppController{
 public $helpers = array('Html', 'Form','Js' => array('Jquery'));
    public $name = 'Emprestimos';
    public $components = array('RequestHandler');

    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Emprestimo.id' => 'asc'
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

    public function add(){
      if($this->Auth->user('role') == 1){
          $this->set('user',$this->Emprestimo->User->find('list',array('conditions' => array('User.id' => $this->Auth->user('id')),'fields' => array('User.id','User.nome'))));
      }else{
          $this->set('user',$this->Emprestimo->User->find('list',array('fields' => array('User.id','User.nome'))));
      }
      
      $this->set('laboratorio',$this->Emprestimo->Laboratorio->find('list',array('fields' => array('Laboratorio.id','Laboratorio.nome'))));
      
      if ($this->request->is('post')) {
        $this->Emprestimo->create();
        $this->request->data['Emprestimo']['estado'] = 0; // seta Requisição com estado Aberta
        $this->request->data['Emprestimo']['notificar'] = 0; // seta Marcador notificar como inexistente
        if ($this->Emprestimo->save($this->request->data['Emprestimo'])) {
           // $this->Session->setFlash(__('A Solicitação foi salva!'));
           // return $this->redirect(array('controller' => 'notifications','action' => 'index'));

           $this->loadModel('Notification');
           $this->Notification->create();
           foreach ($this->request->data['Notification'] as $key => $value) {
              $this->request->data['Notification'][$key]['emprestimo_id'] = $this->Emprestimo->id;
           }
           if ($this->Notification->saveMany($this->request->data['Notification'])) {
              $this->Session->setFlash(__('A Notificação foi salva!'));
              return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('A Notificação não foi salva!'));  
           // return $this->redirect(array('controller' => 'notifications', 'action' => 'add',$this->Emprestimo->id));
         }else{
          $this->Session->setFlash(__('A requisição não foi salva!'));
         }
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

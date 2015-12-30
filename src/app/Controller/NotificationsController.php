<?php
class NotificationsController extends AppController{
    public $helpers = array('Html','Form','Js' => array('Jquery'));
    public $name = 'Notifications';
    public $components = array('RequestHandler');

    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Notifications.id' => 'asc'
        )
    );
    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('index','add','edit','delete');
    }

    public function index(){
      $this->Notification->recursive = 0;
      $this->set('notifications', $this->paginate());
    }
    public function view($id) {
      $this->set('notifications',$this->Notification->findById($id));
    }

    public function add(){
        if ($this->request->is('post')) {
          $this->Notification->create();
        if ($this->Notification->save($this->request->data)) {
          $this->Session->setFlash(__('The notification has been saved.'));
          return $this->redirect(array('action' => 'index'));
        } else {
          $this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
        }
      }
      $emprestimos = $this->Notification->Emprestimo->find('list');
      $componentes = $this->Notification->Componente->find('list');
      $this->set(compact('emprestimos', 'componentes'));
    }

    public function edit($id = null) {
      $this->Notification->id = $id;
      if ($this->request->is('get')) {
		      $this->request->data = $this->Notification->read();
		  } else {
				 if ($this->Notification->save($this->request->data)) {
					     $this->Session->setFlash('A Notificação foi editada!');
					     $this->redirect(array('action' => 'index'));
				 }
		  }
	 }
   public function delete($id) {
     if (!$this->request->is('get')) {
       throw new MethodNotAllowedException();
     }
    if ($this->Notification->delete($id)) {
      $this->Session->setFlash('A Notificação de Id: ' . $id . ' foi deletada.');
      $this->redirect(array('action' => 'index'));
    }
  }
  }
?>

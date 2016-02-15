<?php
class NotificationsController extends AppController{
    public $helpers = array('Html','Form','Js' => array('jquery'));
    public $name = 'Notifications';
    public $components = array('RequestHandler','Paginator');
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
        // debug($this->Session->read('Emprestimo_id'));
        // debug($this->request->data['Notification']);
        if(!$this->Session->check('Emprestimo_id')){
          return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('post')) {
          $this->Notification->create();
            foreach ($this->request->data['Notification'] as $key => $value) {
              $this->request->data['Notification'][$key]['emprestimo_id'] = $this->Session->read('Emprestimo_id');
              $this->Session->delete('Emprestimo_id');
            }
            if ($this->Notification->saveMany($this->request->data['Notification'])) {
              $this->Session->delete('lista');
              $this->Session->setFlash(__('A Solicitação foi salva!'));
              return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('A Solicitação não foi salva!'));
            return $this->redirect(array('action' => 'index'));
        }
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

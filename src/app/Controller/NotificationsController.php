<?php

class NotificationsController extends AppController {

    public $helpers = array('Html', 'Form', 'Js' => array('jquery'));
    public $name = 'Notifications';
    public $components = array('RequestHandler', 'Paginator');
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Notifications.id' => 'asc'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    /* public function index(){
      $this->Notification->recursive = 0;
      $this->set('notifications', $this->paginate());
      }
      public function view($id) {
      $this->set('notifications',$this->Notification->findById($id));
      } */

    public function add() {
        if (!$this->Session->check('Emprestimo_id')) {
            return $this->redirect(array('controller' => 'emprestimos', 'action' => 'profile'));
        }
        if ($this->request->is('post')) {
            $this->Notification->create();
            //Salvar vários input de uma vez em Notifications
            if ($this->Notification->saveMany($this->request->data['Notification'])) {
                $this->Session->delete('lista');
                $this->Session->setFlash('A Solicitação foi salva!', 'success');
                return $this->redirect(array('controller' => 'emprestimos', 'action' => 'profile'));
                $this->Session->delete('Emprestimo_id');
            }
            $this->Session->setFlash('A Solicitação não foi salva!', 'error');
        }
    }

    /* public function edit($id = null) {
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
      } */
}

?>

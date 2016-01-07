<?php
class EmprestimosController extends AppController{
 public $helpers = array('Html', 'Form','Js' => array('Jquery'));
    public $name = 'Emprestimos';
    public $components = array('RequestHandler','Paginator');

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
        $this->request->data['Emprestimo']['notificar'] = 0; // seta Marcador notificar como 'sem'
        $this->loadModel('Notification');
        if (!in_array('Notification',array_keys($this->request->data))) {
          $this->Session->setFlash(__('Não existem componentes nessa solicitação!'));
        }else{
          if ($this->Emprestimo->save($this->request->data['Emprestimo'])) {
            $this->Notification->create();
            foreach ($this->request->data['Notification'] as $key => $value) {
              $this->request->data['Notification'][$key]['emprestimo_id'] = $this->Emprestimo->id;
            }
            if ($this->Notification->saveMany($this->request->data['Notification'])) {
              $this->Session->delete('lista');
              $this->Session->setFlash(__('A Solicitação foi salva!'));
              return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('A Solicitação não foi salva!'));
            return $this->redirect(array('action' => 'index'));
          }
         $this->Session->setFlash(__('A Solicitação não foi salva!'));
        }
      }
    }

    public function edit($id = null) {
      $this->Emprestimo->id = $id;
      if(!$this->Emprestimo->exists()){
          $this->Session->setFlash('Solicitação inexistente!');
          return $this->redirect(array('action' => 'index'));
      }
      $this->set('user',$this->Emprestimo->User->find('list',array('fields' => array('User.id','User.nome'))));
		  $this->set('laboratorio',$this->Emprestimo->Laboratorio->find('list',array('fields' => array('Laboratorio.id','Laboratorio.nome'))));
      if ($this->request->is('get')) {
		      $this->request->data = $this->Emprestimo->read();
		  } else {
				 if ($this->Emprestimo->save($this->request->data)) {
					     $this->Session->setFlash('A Solicitação foi editada!');
					     return $this->redirect(array('action' => 'index'));
				 }
         $this->Session->setFlash('A Solicitação não foi editada!');
		  }
	 }
   
   public function notify($id = null){
      $this->Emprestimo->id = $id;
      if(!$this->Emprestimo->exists()){
          $this->Session->setFlash('Solicitação inexistente!');
          return $this->redirect(array('action' => 'index'));
      }
      if ($this->request->is('get')) {
          $this->request->data = $this->Emprestimo->read();
      } else {
         if ($this->Emprestimo->save($this->request->data)) {
               $this->Session->setFlash('A Solicitação foi alterada!');
               return $this->redirect(array('action' => 'index'));
         }
         $this->Session->setFlash('A Solicitação não foi alterada!');
      }
   }

   public function end($id = null){
      $this->Emprestimo->id = $id;
      if(!$this->Emprestimo->exists()){
          $this->Session->setFlash('Solicitação inexistente!');
          return $this->redirect(array('action' => 'index'));
      }
      if ($this->request->is('get')) {
          $this->request->data = $this->Emprestimo->read();
      }else{
      //Buscar nomes dos componentes por inner join
      $valor = $this->Emprestimo->find('all',
        array('joins' => array(
          array('table' => 'notifications',
                'alias' => 'Notification',
                'type' => 'INNER',
                'conditions' => array('Notification.emprestimo_id = Emprestimo.id')),
          array('table' => 'componentes',
                'alias' => 'Componente',
                'type' => 'INNER',
                'conditions' => array('Notification.componente_id = Componente.id'))
          ),
        'conditions' => array('Notification.emprestimo_id' => $id),
        'fields' => array('Componente.id','Notification.quantidade','Componente.nome')));
      //Enviar campos buscador para view
      $this->set('campos',$valor);
      if($this->request->is('post')){
          $this->loadModel('Componente');
          //Decrementar valores para cada componente
          foreach ($this->request->data['Componente'] as $key => $value) {
              $componente_id = $this->request->data['Componente'][$key]['id'];
              $valor = $this->Componente->find('first',array('conditions' => array(
                                                            'Componente.id' => $componente_id)
                                                            ,'fields' => array('Componente.quantidade')));
              
              $quantidade = $valor['Componente']['quantidade'];
              $valor = $this->request->data['Componente'][$key]['quantidade'];
              if($valor > 0 && $quantidade >= $valor){
                  $resultado = $quantidade - $valor;
                  $this->Componente->query("UPDATE componentes SET quantidade = '$resultado' WHERE id = '$componente_id'");
              }
          }
        if ($this->Emprestimo->save($this->request->data['Emprestimo'])) {
          $this->Session->setFlash('A Solicitação foi finalizada!');
          return $this->redirect(array('action' => 'index'));
        }else{
          $this->Session->setFlash('A Solicitação não foi finalizada!');
        }
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

<?php
App::uses('CakeEmail', 'Network/Email');
class UsersController extends AppController{
    public $helpers = array('Html', 'Form');
    public $name = 'Users';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'User.id' => 'asc'
        )
    );

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('view', 'add','edit','delete','recovery');
    }

    public function index() {
      $this->User->recursive = 0;
      $this->set('users', $this->paginate());
    }

    public function view($id) {
      $this->set('usuario',$this->User->findById($id));
    }

    public function add(){
      if($this->request->is('post')){
        $this->User->create();
      if($this->request->data['User']['password'] == $this->request->data['User']['confsenha']){
      if($this->User->save($this->request->data)){
          $this->Session->setFlash(__('O usuário foi salvo!'));
          return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('O usuário não foi salvo!'));
      }else{
        $this->Session->setFlash(__('Por favor, digite corretamente as senhas!'));
      }
    }
    }

  public function edit($id = null){
    $this->User->id = $id;
    if (!$this->User->exists()) {
         $this->Session->setFlash("Usuário escolhido é inválido!");
         $this->redirect(array('action' => 'index'));
    }
    if($this->request->is('get')){
      $this->request->data = $this->User->findById($id);
    }else{
      if($this->User->save($this->request->data)){
          $this->Session->setFlash('A edição foi realizada com sucesso!');
          $this->redirect(array('action' => 'index'));
        }
      }
    }

  public function delete($id){
    $this->User->id = $id;
    if (!$this->User->exists()) {
         $this->Session->setFlash("Usuário escolhido é inválido!");
         $this->redirect(array('action' => 'index'));
    }
    if(!$this->request->is('get')){
        throw new MethodNotAllowedException();
    }
    if($this->User->delete($id)) {
        $this->Session->setFlash('O usuário de id: ' .$id. ' foi deletado com sucesso');
        $this->redirect(array('action' => 'index'));
    }
  }

  public function login(){
    if($this->request->is('post')) {
        if($this->Auth->login()){
          $this->redirect($this->Auth->redirect());
        } else {
          $this->Session->setFlash('Usuário, senha ou tipo de usuário inválido. Tente novamente.');
        }
    }
  }

  public function logout(){
    $this->redirect($this->Auth->logout());
  }

  public function recovery(){
    if($this->request->is('post')){
        $user = $this->User->find('first',array('conditions' => array('User.matricula' => $this->request->data['User']['matricula'],
          'User.email' => $this->request->data['User']['email'])));
        if(is_null($user)){
          $this->Session->setFlash('Dados incorretos, tente novamente!');
        }else{
          //Gera senha automática
          $password = md5($user['User']['username']);
          $password = substr($password, rand(25,30));
          $usuario = $user['User']['id'];
          $this->User->query("UPDATE users SET password = '$password' WHERE id = '$usuario'");
          //Envia email
          $Email = new CakeEmail('gmail');
          $Email->from(array('arthurpdb8@gmail.com' => 'Arthur'));
          $Email->to($user['User']['email']);          
          $Email->subject('Recuperação de senha do Componizer');
          $Email->send('Sua senha nova é: '.$password);
          $this->Session->setFlash('A senha foi enviada ao seu email!');
          return $this->redirect(array('action' => 'login'));
        }
    }
  }
}
?>

<?php
class HomeController extends AppController{
  public $helpers = array('Html', 'Form');
  public $name = 'Home';

  public function beforeFilter(){
        parent::beforeFilter();
    $this->Auth->allow('index','procurar');
  }
  public function index(){

  }
  public function procurar(){
      $this->redirect(array('controller' => 'Users','action' => 'login'));
  }
}
?>

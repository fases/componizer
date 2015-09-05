<?php
class PlanosController extends AppController{
    public $helpers = array('Html', 'Form');
    public $name = 'Planos';

    public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow('add_planoaula');
    }
    public function index(){
      
    }
    public function add_planoaula(){

    }
}
?>

<?php
App::uses('AppController', 'Controller');
/**
 * PDF Controller
 *
 */
class PDFsController extends AppController {

    public $uses=array();
    
    public function index(){
      
    }
  
    public function viewpdf() {
    $this->loadModel('User');
    $users = $this->User->find('all');
 
    $this->set(compact('users'));
 
    $this->layout = 'pdf';
 
    $this->render('/Pdf/my_pdf_view');
    }
}

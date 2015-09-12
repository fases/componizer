<?php
class ComponentesController extends AppController{
  public $helpers = array('Html', 'Form');
  public $name = 'Componentes';
  public $paginate = array(
      'limit' => 25,
      'order' => array(
          'Componente.id' => 'asc'
      )
  );

  public function beforeFilter(){
    parent::beforeFilter();
    $this->Auth->allow('view', 'add','edit','delete');
  }

  public function index() {
    $this->Componente->recursive = 0;
    $this->set('componentes', $this->paginate());
  }
  public function view($id){
      $this->set('componentes',$this->Componente->findById($id));
  }
  public function add () {
    $this->set('categoria',$this->Componente->Categoria->find('list',array('fields' => array('Categoria.id','Categoria.nome'))));
    $this->set('subcategoria',$this->Componente->Subcategoria->find('list',array('fields' => array('Subcategoria.id','Subcategoria.nome'))));
    if ($this->request->is('post')) {
      $this->Componente->create();
      if ($this->Componente->save($this->request->data)) {
         $this->Session->setFlash(__('O Componente foi salvo!'));
         return $this->redirect(array('action' => 'index'));
       }
      $this->Session->setFlash(__('O Componente não foi salvo!'));
    }
  }
  public function edit($id = null) {
    $this->Componente->id = $id;
    $this->set('categorias',$this->Componente->Categoria->find('list',array('fields' => array('Categoria.id','Categoria.nome'))));
    $this->set('subcategorias',$this->Componente->Subcategoria->find('list',array('fields' => array('Subcategoria.id','Subcategoria.nome'))));
    if ($this->request->is('get')) {
        $this->request->data = $this->Componente->read();
    } else {
       if ($this->Componente->save($this->request->data)) {
             $this->Session->setFlash('O Componente foi editado!');
             $this->redirect(array('action' => 'index'));
       }
    }
 }
 public function delete($id) {
   if (!$this->request->is('get')) {
     throw new MethodNotAllowedException();
   }
   if ($this->Componente->delete($id)) {
     $this->Session->setFlash('O Componente de Id: ' . $id . ' foi deletado.');
     $this->redirect(array('action' => 'index'));
   }
 }
}
?>

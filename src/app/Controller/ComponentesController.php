<?php
class ComponentesController extends AppController{
  public $helpers = array('Html', 'Form','Js' => array('Jquery'));
  public $name = 'Componentes';
  public $components = array('RequestHandler','Paginator');

  public $paginate = array(
      'limit' => 25,
      'order' => array(
          'Componente.id' => 'asc'
      )
  );

  public function beforeFilter(){
    parent::beforeFilter();
    $this->Auth->allow('view', 'add','edit','delete','lista','add_list','rem_list');
  }

  public function index() {
    $this->Componente->recursive = 0;
    $this->set('componentes', $this->paginate());
  }
  public function view($id){
      $this->set('componentes',$this->Componente->findById($id));
  }

  public function add ($subcategoria_id = null) {
      if(is_null($subcategoria_id)){
        $this->set('categoria',$this->Componente->Categoria->find('list',array('fields' => array('Categoria.id','Categoria.nome'))));
        $this->set('subcategoria',$this->Componente->Subcategoria->find('list',array('fields' => array('Subcategoria.id','Subcategoria.nome'))));
      }else{
        $categoria = $this->Componente->Subcategoria->find('first',array('conditions' => array('Subcategoria.id' => $subcategoria_id),'fields' => 'Subcategoria.categoria_id'));
        $this->set('categoria',$this->Componente->Categoria->find('list',array('conditions' => array('Categoria.id' => $categoria['Subcategoria']['categoria_id']),'fields' => array('Categoria.id','Categoria.nome'))));
        $this->set('subcategoria',$this->Componente->Subcategoria->find('list',array('conditions' => array('Subcategoria.id' => $subcategoria_id),'fields' => array('Subcategoria.id','Subcategoria.nome'))));
      }
    if ($this->request->is('post')) {
      $this->Componente->create();
      if ($this->Componente->save($this->request->data)) {
         $this->Session->setFlash(__('O Componente foi salvo!'));
         return $this->redirect(array('action' => 'index'));
       }
      $this->Session->setFlash(__('O Componente não foi salvo!'));
    }
  }

  public function lista(){
    if ($this->request->is('ajax')) {
      $this->layout = 'ajax';
      // $this->Session->delete('lista');
      $this->set('options',$this->Componente->find('list',array('conditions' => array('Componente.nome LIKE' => '%'.$this->request->data['Componente']['campo'].'%'),
            'fields' => array('Componente.id','Componente.nome'))));
    }else{
      return $this->redirect(array('controller' => 'notifications','action' => 'index'));
    }      
  }

  public function add_list(){
    if($this->request->is('ajax')){
        $this->layout = 'ajax';
        $id = $this->request->data['Componente']['resultado'];
        $query = $this->Componente->find('first',array('conditions' => array('Componente.id' => $this->request->data['Componente']['resultado']),
                                  'fields' => 'Componente.nome'));
        $nome = $query['Componente']['nome'];
        $quantidade = $this->request->data['Componente']['quantidade'];
        
        $existe_componente = false;
        if($this->Session->check('lista')){ //Verifica se sessão existe
          $lista_componentes = $this->Session->read('lista');
          foreach ($lista_componentes as $key => $value) {
            if($key == $this->request->data['Componente']['resultado']){
              $existe_componente = true; //Verifica se já existe o id 
            }
          }

          if($existe_componente == false){ //Adiciona campos se o id não existe
            $lista_componentes[$id] = array($nome,$quantidade);
            $this->Session->write('lista',$lista_componentes);
            $this->set('componentes',$lista_componentes);  
          }else{
            $this->set('componentes',$lista_componentes);
            $this->set('aviso','O Componente solicitado está incluso na lista!');
          }
        }else{ // Adiciona $campos do form na array para depois incluir na session
          $lista_componentes = array();
          $lista_componentes[$id] = array($nome,$quantidade);
          $this->Session->write('lista',$lista_componentes);
          $this->set('componentes',$lista_componentes);
        }
    }else{
        return $this->redirect(array('controller' => 'notifications','action' => 'index'));
    }       
  }

  public function rem_list($componente_id){
    if($this->request->is('ajax')){
        $this->layout = 'ajax';
        $indices = array();
        if($this->Session->check('lista')){
          $lista_componentes = $this->Session->read('lista');
          foreach ($lista_componentes as $id => $valores) {
            if($id == $componente_id){
              array_push($indices,$id);
            }
          }
          foreach ($indices as $indice) {
            unset($lista_componentes[$indice]);
          }
          unset($indices);
          $this->set('componentes',$lista_componentes);
          $this->Session->write('lista',$lista_componentes);
        }
    }
  }
  public function edit($id = null) {
    $this->Componente->id = $id;
    if(!$this->Componente->exists()){
        $this->Session->setFlash('Componente inexistente!');
        return $this->redirect(array('action' => 'index'));
    }
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

 public function search(){
			if ($this->request->is('post')) {
				$componente = $this->paginate('Componente', array('Componente.nome LIKE' => '%'.$this->request->data['Componente']['pedaco_nome'].'%'));
			} else {
				$componente = $this->paginate('Componente');
			}
			$this->set('componentes', $componente);
		}
}
?>

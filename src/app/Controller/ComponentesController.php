<?php

class ComponentesController extends AppController {

    public $helpers = array('Html', 'Form', 'Js' => array('jquery'));
    public $name = 'Componentes';
    public $components = array('RequestHandler', 'Paginator', 'Upload');
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Componente.id' => 'asc'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    public function index() {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Componente->recursive = 0;
        $this->set('componentes', $this->paginate());
    }

    public function view($id) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->set('componentes', $this->Componente->findById($id));
    }

    public function add($subcategoria_id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        if (is_null($subcategoria_id)) {
            $this->set('categoria', $this->Componente->Categoria->find('list', array('fields' => array('Categoria.id', 'Categoria.nome'))));
            $this->set('subcategoria', $this->Componente->Subcategoria->find('list', array('fields' => array('Subcategoria.id', 'Subcategoria.nome'))));
        } else {
            $categoria = $this->Componente->Subcategoria->find('first', array('conditions' => array('Subcategoria.id' => $subcategoria_id), 'fields' => 'Subcategoria.categoria_id'));
            $this->set('categoria', $this->Componente->Categoria->find('list', array('conditions' => array('Categoria.id' => $categoria['Subcategoria']['categoria_id']), 'fields' => array('Categoria.id', 'Categoria.nome'))));
            $this->set('subcategoria', $this->Componente->Subcategoria->find('list', array('conditions' => array('Subcategoria.id' => $subcategoria_id), 'fields' => array('Subcategoria.id', 'Subcategoria.nome'))));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->request->is('post')) {           // checks for the post values
                $this->Componente->create();
                if($this->request->data['Componente']['subcategoria_id'] == 0){
                    $this->request->data['Componente']['subcategoria_id'] = null;
                }
                // $this->Componente->request->data['Componente']['datasheet'] = 'src/files/'.$this->data['Componente']['datasheet']['name'];
                if ($this->Componente->save($this->request->data)) {
                    $this->Session->setFlash('O Componente foi salvo!', 'success');
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash('O Componente não foi salvo!', 'error');
            }
        }
    }

    public function lista() {
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            // $this->Session->delete('lista');
            $this->set('componentes', $this->Componente->find('all', array('conditions' => array('Componente.nome LIKE' => '%' . $this->request->data['Componente']['campo'] . '%'))));
        } else {
            return $this->redirect(array('controller' => 'emprestimos', 'action' => 'profile'));
        }
    }

    public function add_list($componente_id = null) {
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            $query = $this->Componente->find('first', array('conditions' => array('Componente.id' => $componente_id),
                'fields' => 'Componente.nome'));
            $nome = $query['Componente']['nome'];
            $existe_componente = false;
            if ($this->Session->check('lista')) { //Verifica se sessão existe
                $lista_componentes = $this->Session->read('lista');
                foreach ($lista_componentes as $key => $value) {
                    if ($key == $componente_id) {
                        $existe_componente = true; //Verifica se já existe o id 
                    }
                }
                if ($existe_componente == false) { //Adiciona campos se o id não existe
                    $quantidade = 0;
                    $lista_componentes[$componente_id] = array($nome, $quantidade);
                    $this->Session->write('lista', $lista_componentes);
                    $this->set('componentes', $lista_componentes);
                    //Verifica se existem o componente no estoque
                } else {
                    $this->set('componentes', $lista_componentes);
                    $this->set('aviso', 'O Componente solicitado está incluso na lista!');
                }
            } else { // Adiciona $campos do form na array para depois incluir na session
                $lista_componentes = array();
                $lista_componentes[$componente_id] = array($nome, 0);
                $this->Session->write('lista', $lista_componentes);
                $this->set('componentes', $lista_componentes);
            }
        } else {
            return $this->redirect(array('controller' => 'notifications', 'action' => 'index'));
        }
    }

    public function rem_list($componente_id) {
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            $indices = array();
            if ($this->Session->check('lista')) {
                $lista_componentes = $this->Session->read('lista');
                foreach ($lista_componentes as $id => $valores) {
                    if ($id == $componente_id) {
                        array_push($indices, $id);
                    }
                }
                foreach ($indices as $indice) {
                    unset($lista_componentes[$indice]);
                }
                unset($indices);
                $this->set('componentes', $lista_componentes);
                $this->Session->write('lista', $lista_componentes);
            }
        }
    }

    public function edit($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            $this->Session->setFlash('Componente inexistente!');
            return $this->redirect(array('action' => 'index'));
        }
        $this->set('categorias', $this->Componente->Categoria->find('list', array('fields' => array('Categoria.id', 'Categoria.nome'))));
        $this->set('subcategorias', $this->Componente->Subcategoria->find('list', array('fields' => array('Subcategoria.id', 'Subcategoria.nome'))));
        if ($this->request->is('get')) {
            $this->request->data = $this->Componente->read();
        } else {
            if ($this->Componente->save($this->request->data)) {
                $this->Session->setFlash('O Componente foi editado!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Componente->delete($id)) {
            $this->Session->setFlash('O Componente de Id: ' . $id . ' foi deletado.', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function search() {
        if ($this->request->is('post')) {
            $componente = $this->paginate('Componente', array('Componente.nome LIKE' => '%' . $this->request->data['Componente']['pedaco_nome'] . '%'));
        } else {
            $componente = $this->paginate('Componente');
        }
        $this->set('componentes', $componente);
    }

    public function upload($id = null) {
        if($this->Auth->user('role') < 1){
            $this->Session->setFlash('A funcionalidade não é acessível ao seu tipo de usuário','error');
            return $this->redirect(array('controller' => 'emprestimos','action' => 'profile'));
        }
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            $this->Session->setFlash('Componente inexistente!', 'error');
            return $this->redirect(array('action' => 'index'));
        }
        $this->set('componente', $this->Componente->find('first', array('conditions' => array('Componente.id' => $id), 'fields' => 'Componente.nome')));
        if (!empty($this->request->data)) {
            $this->Upload->upload($this->request->data['Componente']['datasheet']);
            if (is_null($this->request->data['Componente']['datasheet'])) {
                $this->Session->setFlash('Não foi anexado nenhum arquivo!', 'error');
                return $this->redirect(array('action' => 'index'));
            }
            $arquivo = '/src/files/datasheet/' . $this->request->data['Componente']['datasheet']['name'];
            if ($this->Componente->saveField('datasheet', $arquivo)) {
                $this->Session->setFlash('Anexo adicionado com sucesso!', 'success');
                return $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function datasheets() {

        if($this->request->data['Componente']['categoria'] == 0){
            if($this->request->data['Componente']['subcategoria'] == 0){
                $conditions => array('conditions' => array('Componente.datasheet is not null'),
                    'fields' => array('all', 'Componente.datasheet'));
            }   
        }
        $this->set('componentes', $this->Componente->find('all', array('conditions' => array('Componente.datasheet is not null'),
                    'fields' => array('Componente.nome', 'Componente.datasheet'))));
    }

    public function download($id = null) {
        $resultado = $this->Componente->find('first', array('conditions' => array('Componente.id' => $id),
            'fields' => 'Componente.datasheet'));
        $this->response->file(
                $resultado['Componente']['datasheet'], array('download' => true, 'name' => $resultado['Componente']['nome'])
        );
        $this->render(false);
    }

}

?>
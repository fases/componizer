<?php

App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Users';
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'User.id' => 'asc'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id) {
        $this->set('usuario', $this->User->findById($id));
    }

    public function profile() {
        $this->set('usuarios', $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id')))));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->request->data['User']['password'] == $this->request->data['User']['confsenha']) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('O usuário foi salvo!', 'success');
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash('O usuário não foi salvo!', 'error');
            } else {
                $this->Session->setFlash('Por favor, digite corretamente as senhas!', 'error');
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash("Usuário escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->User->findById($id);
        } else {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('A edição foi realizada com sucesso!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit_profile($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash("Usuário escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->User->findById($id);
        } else {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('A edição foi realizada com sucesso!', 'success');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    /* if ($this->request->is('post')) {
      $this->request->data = $this->User->find('first',array('conditions' => array('User.id' => $this->Auth->user('id'))));
      if($this->request->data['User']['password'] == $this->request->data['User']['novasenha']){
      if ($this->User->save($this->request->data)) {
      $this->Session->setFlash('Senha alterada com sucesso!');
      $this->redirect(array('action' => 'index'));
      }else{
      $this->Session->setFlash('A senha não foi alterada!');
      $this->redirect(array('action' => 'index'));
      }
      }else{
      $this->Session->setFlash(__('Por favor, digite corretamente as senhas!'));
      }
      } */

    public function password() {
        $this->set('User', $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id')))));

        if ($this->request->is('post')) {
            if ($this->request->data['User']['novasenha'] === $this->request->data['User']['conf_novasenha']) {
                $this->request->data['User']['id'] = $this->Session->read('Auth.User.id');
                $this->request->data['User']['password'] = $this->request->data['User']['novasenha'];
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('Senha alterada com sucesso!', 'success');
                    $this->redirect(array('controller' => 'emprestimo', 'action' => 'profile'));
                }
            } else {
                $this->Session->setFlash('Por favor, digite corretamente as senhas!', 'error');
            }
        }
    }

    public function delete($id) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash("Usuário escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if (!$this->request->is('get')) {
            $this->Session->setFlash("Usuário escolhido é inválido!", 'error');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash('O usuário de id: ' . $id . ' foi deletado com sucesso', 'success');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function login() {
        $this->layout = 'home';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Usuário ou senha inválida(o). Tente novamente.', 'home_error');
                return $this->redirect(array('action' => 'login#login'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function recovery() {
        $this->layout = 'home';
        if ($this->request->is('post')) {
            $user = $this->User->find('first', array('conditions' => array('User.matricula' => $this->request->data['User']['matricula'],
                    'User.email' => $this->request->data['User']['email'])));
            if (is_null($user)) {
                $this->Session->setFlash('Dados incorretos, tente novamente!');
            } else {
                //Gera senha automática
                $password = md5($user['User']['username']);
                $password = substr($password, rand(25, 30));
                $usuario = $user['User']['id'];
                $this->User->query("UPDATE users SET password = '$password' WHERE id = '$usuario'");
                //Envia email
                $Email = new CakeEmail('gmail');
                $Email->from(array('componizer.gerenciamento@gmail.com' => 'Componizer - Sistema de gerenciamento online para componentes eletrônicos'));
                $Email->to($user['User']['email']);
                $Email->subject('Recuperação de senha do Componizer');
                $Email->send('Sua senha nova é: ' . $password);
                $this->Session->setFlash('A senha foi enviada para o seu email!');
                return $this->redirect(array('action' => 'login'));
            }
        }
    }

    function search() {
        if ($this->request->is('post')) {
            $valor = $this->paginate('User', array('User.nome LIKE' => '%' . $this->request->data['User']['pedaco_nome'] . '%'));
        } else {
            $valor = $this->paginate('User');
        }
        $this->set('users', $valor);
    }

}

?>

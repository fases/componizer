<?php
App::uses('AuthComponent', 'Controller/Component');
    class User extends AppModel{
        public $name = 'User';
        public $validate = array(
          'matricula' => array(
            'required' => array(
              'rule' => 'numeric',
              'message' => 'O campo matrícula é obrigatório!'
            )
        ),
          'nome' => array(
            'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'O campo nome é obrigatório!'
            )
          ),
          'username' => array(
            'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'Insira um nome de usuário!'
            )
          ),
          'password' => array(
            'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'Insira uma senha!'
            )
          ),
          'role' => array(
            'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'Insira uma tipo válido!'
           )
          ),
          'email' => array(
 			'email' => array(
 				'rule' => array('email'),
 				'message' => 'Insira um email válido',
 			)
 		)
        );
    public function beforeSave($options = array()){
      if(isset($this->data[$this->alias]['password'])){
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
      }
      return true;
    }
}
?>

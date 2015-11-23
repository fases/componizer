<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

    public $name = 'User';
    public $hasMany = array('Emprestimo' => array(
            'className' => 'Emprestimo',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'dependent' => true
    ));
    public $validate = array(
        'nome' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'O campo nome é obrigatório!'
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'O campo username é obrigatório'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('minLength', 6),
                'message' => 'Insira uma senha com no mínimo 6 caracteres'
            )
        ),
        'email' => array(
            'rule' => array('email', true),
            'message' => 'Insira um endereço válido de email'
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'bolsista', 'professor')),
                'message' => 'Escolha um tipo de usuário válido',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}

?>

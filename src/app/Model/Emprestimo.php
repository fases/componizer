<?php

class Emprestimo extends AppModel {

    public $name = 'Emprestimo';
    public $hasMany = array('Notification' => array(
            'className' => 'Notification',
            'foreignKey' => 'emprestimo_id',
            'conditions' => '',
            'dependent' => false,
            'fields' => ''
        ));
    public $belongsTo = array('User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'dependent' => true,
            'fields' => array('id', 'nome')
        ),
        'Laboratorio' => array(
            'className' => 'Laboratorio',
            'foreignKey' => 'laboratorio_id',
            'conditions' => '',
            'fields' => array('id', 'nome')
        ));
    
    public $validate = array(
        'horario' => array(
            'rule' => 'notEmpty',
            'message' => 'Insira um horário válido!'
        ),
        'turno' => array(
            'rule' => 'notEmpty',
            'message' => 'Insira um turno válido!'
        ),
        'data_aula' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Insira uma data válida!'
        ),
        'laboratorio_id' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário associar a um laboratório!'
        ),
        'user_id' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário associar a um usuário!'
        ),
        'data_emprestimo' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Insira uma data válida!'
        )
    );

}

?>

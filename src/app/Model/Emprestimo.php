<?php

class Emprestimo extends AppModel {

    public $name = 'Emprestimo';
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
        /*
        'Componente' => array(
            'className' => 'Componente',
            'foreignKey' => 'componente_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => array('id', 'nome'))
    );*/
    public $validate = array(
        'horario' => array(
            'rule' => 'notEmpty',
            'message' => 'Insira um horário válido'
        ),
        'turno' => array(
            'rule' => 'notEmpty',
            'message' => 'Insira um turno válido'
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
        'objetivo' => array(
            'rule' => 'notEmpty',
            'required' => 'true',
            'message' => 'O campo objetivo é obrigatório!'
        ),
        'material' => array(
            'rule' => 'notEmpty',
            'required' => 'true',
            'message' => 'O campo material é obrigatório!'
        )
    );

}

?>

<?php

class Notification extends AppModel {

    public $name = 'Notification';
    public $belongsTo = array('Emprestimo' => array(
            'className' => 'Emprestimo',
            'foreignKey' => 'emprestimo_id',
            'conditions' => '',
            'dependent' => true,
            'fields' => ''
        ),
        'Componente' => array(
            'className' => 'Componente',
            'foreignKey' => 'componente_id',
            'conditions' => '',
            'fields' => ''
        ));
        
    public $validate = array(
        'emprestimo_id' => array(
            'rule' => 'notEmpty',
            'message' => 'É necessário associar a um emprestimo'
        ),
        'componente_id' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário associar a algum componente!'
        ),
        'quantidade' => array(
            'rule' => 'numeric',
            'message' => 'É necessário informar a quantidade necessária!',
        )
    );

}

?>

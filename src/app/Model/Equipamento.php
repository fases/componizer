<?php

class Equipamento extends AppModel {

    public $name = 'Equipamento';
    public $belongsTo = array('Laboratorio' => array(
            'className' => 'Laboratorio',
            'foreignKey' => 'laboratorio_id',
            'conditions' => '',
            'fields' => array('id', 'nome')
        ));
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'message' => 'Insira o nome do equipamento!'
        ),
        'descricao_defeito' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Digite o defeito que o equipamento apresentou!'
        ),
        'laboratorio_id' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário associar a um Laboratório!'
        ),
        'situacao' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário atribuir um status!'
        ),
        'localizacao' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário informar a localizacao do equipamento!'
        )
    );

}

?>

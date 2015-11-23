<?php

class Subcategoria extends AppModel {

    public $name = 'Subcategoria';
    public $belongsTo = array('Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'categoria_id',
            'conditions' => '',
            'fields' => array('id', 'nome')
    ));
    public $hasMany = array('Componente' => array(
            'className' => 'Componente',
            'foreignKey' => 'subcategoria_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => array('id', 'nome'))
    );
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'O campo nome é obrigatório!'
        ),
        'categoria_id' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'É necessário associar a uma categoria!'
        )
    );

}

?>

<?php
    class Categoria extends AppModel{
      public $name = 'Categoria';
      public $hasMany = array('Subcategoria' => array(
        'className' => 'Subcategoria',
        'foreignKey' => 'categoria_id',
        'dependent' => false,
        'conditions' => '',
        'fields' => array('id','nome'))
      );

	    public $validate = array(
		        'nome' => array(
			      'rule' => 'notEmpty'
		        ),
            'descricao' => array(
            'rule' => 'notEmpty'
            )
        );
    }
?>

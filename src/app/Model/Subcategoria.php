<?php
    class Subcategoria extends AppModel{
        public $name = 'Subcategoria';

        public $belongsTo = array('Categoria' => array(
          'className' => 'Categoria',
          'foreignKey' => 'categoria_id',
          'conditions' => '',
          'fields' => array('id','nome'))
        );

        public $validate = array(
		      'nome' => array(
			    'rule' => 'notEmpty',
          'required' => true
		    ),
        'descricao' => array(
            'rule' => 'notEmpty'
        ),
        'categoria_id' => array(
            'rule' => 'notEmpty',
            'required' => true
        )
    );
    }
?>

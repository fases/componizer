<?php
    class Laboratorio extends AppModel{
        public $name = 'Laboratorio';
        public $validate = array(
  		   'nome' => array(
  		      'rule' => 'notEmpty',
                'required' => true,
                'message' => 'O campo nome é obrigatório!'
              )
            );
        public $hasMany = array('Emprestimo' => array(
            'className' => 'Emprestimo',
            'foreignKey' => 'laboratorio_id',
            'conditions' => '',
            'dependent' => true,
            'fields' => ''
        ));
      }
?>

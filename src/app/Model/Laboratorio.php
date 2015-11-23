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
        public $hasMany = array('Emprestimo');
      }
?>

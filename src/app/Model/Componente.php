<?php
class Componente extends AppModel{
  public $name = 'Componente';

      public $belongsTo = array('Categoria' => array(
              'className' => 'Categoria',
              'foreignKey' => 'categoria_id',
              'conditions' => '',
              'fields' => array('id','nome')
            ),
            'Subcategoria' => array(
             'className' => 'Subcategoria',
             'foreignKey' => 'subcategoria_id',
             'conditions' => '',
             'fields' => array('id','nome')
      ));
      public $validate = array(
        'nome' => array(
        'rule' => 'notEmpty',
        'required' => true
      ),
      'categoria_id' => array(
          'rule' => 'notEmpty',
          'required' => true
      ),
      'subcategoria_id' => array(
          'rule' => 'notEmpty',
          'required' => true
      ),
      'descricao' => array(
      'rule' => 'notEmpty'
      ));
}
?>

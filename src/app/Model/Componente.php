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
        'required' => true,
        'message' => 'O campo nome é obrigatório!'
      ),
      'quantidade' => array(
        'rule' => 'notEmpty',
        'required' => true,
        'message' => 'É necessario a quantidade existente do componente!'
      ),
      'categoria_id' => array(
          'rule' => 'notEmpty',
          'required' => true,
          'message' => 'É necessario associar a uma Categoria!'
      ),
      'linha' => array(
        'rule' => 'notEmpty',
        'required' => true,
        'message' => 'O campo localização é obrigatório!'
      ),
      'coluna' => array(
        'rule' => 'notEmpty',
        'required' => true,
        'message' => 'O campo localização é obrigatório!'
      ),
      'datasheet' => array(
        'rule1' => array(
            'rule'    => array(
            'extension',array('pdf')),
            'message' => 'Faça upload de um arquivo PDF'
         )
      ));
}
?>

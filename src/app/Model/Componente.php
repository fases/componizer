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
      'categoria_id' => array(
          'rule' => 'notEmpty',
          'required' => true,
          'message' => 'É necessario associar a uma Categoria!'
      ),
      'descricao' => array(
        'rule' => 'notEmpty',
        'required' => true,
        'message' => 'É necessario uma descricão do componente!'
      ),
      'localizacaox' => array(
        'rule' => 'notEmpty',
        'required' => true,
        'message' => 'O campo localização é obrigatório!'
      ),
      'localizacaoy' => array(
        'rule' => 'notEmpty',
        'required' => true,
        'message' => 'O campo localização é obrigatório!'
      ));
}
?>

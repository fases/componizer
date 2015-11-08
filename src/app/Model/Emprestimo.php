<?php
class Emprestimo extends AppModel{
  public $name = 'Emprestimo';

public $belongsTo = array('User' => array(
    'className' => 'User',
    'foreignKey' => 'username_id',
    'conditions' => '',
    'fields' => array('id','nome')
  ),
    'Laboratorio' => array(
     'className' => 'Laboratorio',
     'foreignKey' => 'nome_id',
     'conditions' => '',
     'fields' => array('id','nome'))
  );
public $hasMany = array('Componente' => array(
  'className' => 'Componente',
  'foreignKey' => 'subcategoria_id',
  'dependent' => true,
  'conditions' => '',
  'fields' => array('id','nome'))
);

public $validate = array(

  'data' => array(
    'rule' => 'notEmpty',
    'message' => 'Insira uma data válida!'
  ),
  'hora' => array(
    'rule' => 'notEmpty',
    'message' => 'Insira um horário válido!'
  ),
  'nome_id' => array(
    'rule' => 'notEmpty',
    'required' => true,
    'message' => 'É necessário associar a um laboratório!'
  ),
  'username_id' => array(
    'rule' => 'notEmpty',
    'required' => true,
    'message' => 'É necessário associar a um usuário!'
  ),
  'objetivo' => array(
     'rule' => 'notEmpty',
     'required' => 'true',
     'message' => 'O campo objetivo é obrigatório!'
  ),
     'material' => array(
        'rule' => 'notEmpty',
        'required' => 'true',
        'message' => 'O campo descrição é obrigatório!'
     )

  );
}
?>

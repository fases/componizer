<?php
class Plano extends AppModel{
  public $name = 'Plano';

  public $validate = array(
      'data_aula' =>array(
        'rule' => 'notEmpty',
        'message' => 'Por favor insira uma data válida!'
      )
  );
}
?>

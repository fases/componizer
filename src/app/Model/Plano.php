<?php
class Plano extends AppModel{
  public $name = 'Plano';

  public $validate = array(
      'assunto' => array(
        'rule' => 'notEmpty',
        'message' => 'O assunto da aula é necessário!'
      ),
      'data_aula' => array(
        'rule' => 'notEmpty',
        'message' => 'Por favor insira uma data válida!'
      ),
      'hora_aula' => array(
        'rule' => 'notEmpty',
        'message' => 'Por favor insira um horário válido!')
      );
}
?>

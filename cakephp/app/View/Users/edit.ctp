<h1> Editar usuário </h1>
<?php
  echo $this->Form->create('User',array('action' => 'edit'));
  echo $this->Form->input('nome');
  echo $this->Form->input('username');
  echo $this->Form->input('password');
  echo $this->Form->input('email');
  echo $this->Form->input('telefone');
  echo $this->Form->input('role', array(
    'options' => array('professor'=>'Professor',
                       'bolsista'=>'Bolsista',
                       'admin'=>'Administrador'
            ),
    'empty' => '(Selecione o tipo de usuario)'));
  echo $this->Form->end("Editar");
?>

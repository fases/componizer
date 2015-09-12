<h1> Adicionar Usuário </h1>
<?php
  echo $this->Form->create('User',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->input('username');
  echo $this->Form->input('password');
  echo $this->Form->input('email');
  echo $this->Form->input('telefone');
  echo $this->Form->input('role', array(
    'options' => array('professor'=>'Professor',
                       'bolsista'=>'Bolsista',
                       'admin'=>'Administrador'
            )));
  echo $this->Form->end("Cadastrar");
?>

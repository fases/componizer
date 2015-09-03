<h1> Adicionar Categoria </h1>
<?php
  echo $this->Form->create('Categoria',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->input('descricao');
  echo $this->Form->end('Cadastrar');
?>

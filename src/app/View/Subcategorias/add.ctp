<h1> Adicionar Sub-Categoria </h1>
<?php
  echo $this->Form->create('Subcategoria',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->input('descricao');
  echo $this->Form->input('categoria_id',array('type' => 'select','options' => $categories,'label' => 'Categoria'));
  echo $this->Form->end('Cadastrar');
?>

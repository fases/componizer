<h1> Adicionar Componentes </h1>
<?php
  echo $this->Form->create('Componente',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->input('categoria_id', array('type' => 'select', 'options' => $categoria,'label' => 'Categoria'));
  echo $this->Form->input('subcategoria_id',array('type' => 'select','options' => $subcategoria,'label' => 'Subcategoria'));
  echo $this->Form->input('descricao');
  echo $this->Form->end('Cadastrar');
?>

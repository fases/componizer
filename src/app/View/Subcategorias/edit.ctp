<h1> Editar Sub-Categoria </h1>
<?php
    echo $this->Form->create('Subcategoria', array('action' => 'edit'));
	  echo $this->Form->input('nome');
    echo $this->Form->input('descricao',array('rows' => '5'));
    echo $this->Form->input('categoria_id',array('type' => 'select','options' => $categories,'label' => 'Categoria'));
    echo $this->Form->end('Salvar');
?>

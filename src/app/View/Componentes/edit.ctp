<h1> Editar Componentes </h1>
<?php
    echo $this->Form->create('Componente', array('action' => 'edit'));
	echo $this->Form->input('nome');
    echo $this->Form->input('categoria_id',array('type' => 'select','options' => $categorias,'label' => 'Categoria'));
    echo $this->Form->input('subcategoria_id',array('type' => 'select','options' => $subcategorias,'label' => 'Subcategoria'));
    echo $this->Form->input('descricao');
    echo $this->Form->end('Editar');
?>

<div class="subcategoria view">
<h1> Editar Sub-Categoria </h1>
<?php
    echo $this->Form->create('Subcategoria', array('action' => 'edit'));
	  echo $this->Form->input('nome');
    echo $this->Form->input('descricao',array('rows' => '5'));
    echo $this->Form->input('categoria_id',array('type' => 'select','options' => $categories,'label' => 'Categoria'));
    echo $this->Form->end('Salvar');
?>
</div>
<div class="actions">
	<h3><?php echo __('Subcategoria'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar subcategorias'), array('action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Categoria'); ?></h3>
  <ul>
		<li><?php echo $this->Html->link(__('Listar categorias'), array('controller' => 'categorias','action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Componente'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
	</ul>
</div>

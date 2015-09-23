<div class="componente view">
<h1> Adicionar Componentes </h1>
<?php
  echo $this->Form->create('Componente',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->input('categoria_id', array('type' => 'select', 'options' => $categoria,'label' => 'Categoria'));
  echo $this->Form->input('subcategoria_id',array('type' => 'select','options' => $subcategoria,'label' => 'Subcategoria'));
  echo $this->Form->input('descricao', array('type' => 'textarea'));
  echo $this->Form->input('localizacaox');
  echo $this->Form->input('localizacaoy');
  echo $this->Form->end('Cadastrar');
?>
</div>
<div class="actions">
	<h3><?php echo __('Componente'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo componente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar componentes'), array('action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Categoria'); ?></h3>
  <ul>
		<li><?php echo $this->Html->link(__('Listar categorias'), array('controller' => 'categorias','action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Subcategoria'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?> </li>
	</ul>
</div>

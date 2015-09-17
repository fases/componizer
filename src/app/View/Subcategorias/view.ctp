<div class="subcategories view">
<h1><?php echo $subcategories['Subcategoria']['nome']?></h1>
<p><small> Descrição: <?php echo $subcategories['Subcategoria']['descricao']?> </small></p>
<p><small> Categoria: <?php echo $subcategories['Categoria']['nome']?> </small></p>
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

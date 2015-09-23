<div class="componente view">
<h1><?php echo $componentes['Componente']['nome']?></h1>
<p><small> Categoria: <?php echo $componentes['Categoria']['nome']?> </small></p>
<p><small> Subcategoria: <?php echo $componentes['Subcategoria']['nome']?> </small></p>
<p><small> Descrição: <?php echo $componentes['Componente']['descricao']?> </small></p>
<p><small> Linha: <?php echo $componentes['Componente']['localizacaox']?> </small></p>
<p><small> Coluna: <?php echo $componentes['Componente']['localizacaoy']?> </small></p>
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

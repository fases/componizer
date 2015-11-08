<div class="componentes view">
<fieldset>
  <legend> Componentes </legend>
</fieldset>
<table>
<tr><th> Nome </th>
<th> Categoria </th>
<th> Subcategoria </th>
<th> Descrição </th>
<th> Linha </th>
<th> Coluna </th>
<!--<th> Editar </th>
<th> Remover </th>-->
</tr>
<?php foreach ($componentes as $valor): ?>
  <tr>

    <td> <?php echo $this->Html->link($valor['Componente']['nome'], array('action' => 'view', $valor['Componente']['id'])); ?> </td>
    <td> <?php echo $valor['Categoria']['nome']; ?> </td>
    <td> <?php echo $valor['Subcategoria']['nome']; ?> </td>
    <td> <?php echo $valor ['Componente']['descricao']; ?> </td>
    <td> <?php echo $valor ['Componente']['localizacaox']; ?> </td>
    <td> <?php echo $valor ['Componente']['localizacaoy']; ?> </td>
    <td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Componente']['id']));?> </td>
    <td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Componente']['id']));?> </td>
  </tr>
<?php endforeach; ?>
</table>
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

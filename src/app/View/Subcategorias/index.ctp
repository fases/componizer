<div class="subcategoria view">
<fieldset>
  <legend> Subcategorias </legend>
<table>
  <tr><th> Nome </th>
  <th> Descrição </th>
  <th> Categoria </th>
  <th> Editar </th>
  <th> Remover </th>
  <th> Componente</th></tr>
  <?php foreach ($subcategories as $valor): ?>
  <tr>
	<td> <?php echo $this->Html->link($valor['Subcategoria']['nome'],array('action' => 'view',$valor['Subcategoria']['id'])); ?> </td>
  <td> <?php echo $valor ['Subcategoria']['descricao']; ?> </td>
  <td> <?php echo $valor ['Categoria']['nome']; ?> </td>
	<td> <?php echo $this->Html->link('Editar',array('action' => 'edit', $valor['Subcategoria']['id'])) ?></td>
	<td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Subcategoria']['id']))?></td>
  <td> <?php echo $this->Html->link('Cadastrar',array('controller' => 'componentes','action' => 'add',$valor['Subcategoria']['categoria_id'],$valor['Subcategoria']['id'])) ?></td>
  </tr>
  <?php endforeach; ?>
</table>
</fieldset>
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

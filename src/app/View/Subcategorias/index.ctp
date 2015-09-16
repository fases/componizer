<fieldset>
  <legend> Subcategorias </legend>
<?php echo $this->Html->link('Adicionar Sub-Categoria',array('action' => 'add')); ?>
<table>
  <th> Nome </th>
  <th> Descrição </th>
  <th> Categoria </th>
  <th> Editar </th>
  <th> Remover </th>
  <th> Cadastrar componente </th>
  <?php foreach ($subcategories as $valor): ?>
  <tr>
	<td> <?php echo $this->Html->link($valor['Subcategoria']['nome'],array('action' => 'view',$valor['Subcategoria']['id'])); ?> </td>
  <td> <?php echo $valor ['Subcategoria']['descricao']; ?> </td>
  <td> <?php echo $valor ['Categoria']['nome']; ?> </td>
	<td> <?php echo $this->Html->link('Editar',array('action' => 'edit', $valor['Subcategoria']['id'])) ?></td>
	<td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Subcategoria']['id']))?></td>
  <td> <?php echo $this->Html->link('Componente',array('controller' => 'componentes','action' => 'add',$valor['Subcategoria']['categoria_id'],$valor['Subcategoria']['id'])) ?></td>
  </tr>
  <?php endforeach; ?>
</table>
</fieldset>

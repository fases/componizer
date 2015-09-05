<h1> Sub-categoria de Componentes </h1>
<?php echo $this->Html->link('Adicionar Sub-Categoria',array('action' => 'add')); ?>
<table>
  <th> Id </th>
  <th> Nome </th>
  <th> Descrição </th>
  <th> Categoria </th>
  <?php foreach ($subcategories as $valor): ?>
  <tr>
  <td> <?php echo $valor['Subcategoria']['id']; ?> </td>
	<td> <?php echo $this->Html->link($valor['Subcategoria']['nome'],array('action' => 'view',$valor['Subcategoria']['id'])); ?> </td>
  <td> <?php echo $valor ['Subcategoria']['descricao']; ?> </td>
  <td> <?php echo $valor ['Categoria']['nome']; ?> </td>
	<td> <?php echo $this->Html->link('Editar',array('action' => 'edit', $valor['Subcategoria']['id'])) ?></td>
	<td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Subcategoria']['id']))?></td>
  </tr>
  <?php endforeach; ?>
</table>

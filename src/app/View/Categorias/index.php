<h1> Categorias de Componentes </h1>
<?php echo $this->Html->link('Adicionar',array('action' => 'add')); ?>
<table>
  <th> Id </th>
  <th> Nome </th>
  <th> Descrição </th>
  <?php foreach ($categories as $valor): ?>
  <tr>
  <td> <?php echo $valor['Categoria']['id']; ?> </td>
	<td> <?php echo $valor['Categoria']['nome']; ?> </td>
  <td> <?php echo $valor ['Categoria']['descricao']; ?> </td>
	<td> <?php echo $this->Html->link('Editar',array('action' => 'edit', $valor['Categoria']['id'])) ?></td>
	<td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Categoria']['id']))?></td>
  </tr>
  <?php endforeach; ?>
</table>

<fieldset>
  <legend> Categorias </legend>
<?php echo $this->Html->link('Adicionar',array('action' => 'add')); ?>
<table>
  <th> Nome </th>
  <th> Descrição </th>
  <th> Editar </th>
  <th> Remover </th>
  <?php foreach ($categories as $valor): ?>
  <tr>
	<td> <?php echo $this->Html->link($valor['Categoria']['nome'],array('action' => 'view', $valor['Categoria']['id'])) ?> </td>
  <td> <?php echo $valor ['Categoria']['descricao']; ?> </td>
	<td> <?php echo $this->Html->link('Editar',array('action' => 'edit', $valor['Categoria']['id'])) ?></td>
	<td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Categoria']['id']))?></td>
  </tr>
  <?php endforeach; ?>
</table>
</fieldset>
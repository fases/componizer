<fieldset>
  <legend> Componentes </legend>
</fieldset>
<p> <?php echo $this->Html->link('Adicionar Componentes', array('action' => 'add'));?></p>

<table>
<tr><th> ID </th>
<th> Nome </th>
<th> Categoria </th>
<th> Subcategoria </th>
<th> Descrição </th></tr>
<?php foreach ($componentes as $valor): ?>

  <tr>
    <td> <?php echo $valor['Componente']['id']; ?> </td>
    <td> <?php echo $this->Html->link($valor['Componente']['nome'], array('action' => 'view', $valor['Componente']['id'])); ?> </td>
    <td> <?php echo $valor['Categoria']['nome']; ?> </td>
    <td> <?php echo $valor['Subcategoria']['nome']; ?> </td>
    <td> <?php echo $valor ['Componente']['descricao']; ?> </td>
    <td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Componente']['id']));?> </td>
    <td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Componente']['id']));?> </td>
  </tr>
<?php endforeach; ?>
</table>

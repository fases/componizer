<div class= "lab view">
<fieldset>
<legend> Laboratórios </legend>
<table>
<tr>
<th> ID </th>
<th> Nome </th>
<th> Sala </th>
<th> Ações </th>
</tr>
<?php foreach ($laboratorios as $valor): ?>
<tr>
<td> <?php echo $valor['Laboratorio']['id']; ?> </td>
<td> <?php echo $valor['Laboratorio']['nome']; ?> </td>
<td> <?php echo $valor['Laboratorio']['sala']; ?> </td>
<td class="actions">
	<?php echo $this->Html->link('Abrir',array('action' => 'view',$valor['Laboratorio']['id'])) ?>
	<?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Laboratorio']['id']));?>
	<?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Laboratorio']['id']));?> </td>
</tr>
<?php endforeach ?>
</table>
</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Laboratórios'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Laboratório'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar laboratórios'), array('action' => 'index')); ?> </li>
	</ul>

</div>

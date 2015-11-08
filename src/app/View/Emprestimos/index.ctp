<div class= "requisicao view">
<fieldset>
<legend> Requisições </legend>
<table>
<th> ID </th>
<th> Data </th>
<th> Hora </th>
<th> Local </th>
<th> Solicitante </th>
<!--<th> Editar </th></tr>-->
<?php foreach ($emprestimos as $valor): ?>
<tr>
<td> <?php echo $this->Html->link($valor['Emprestimo']['id'],array('action' => 'view',$valor['Emprestimo']['id'])); ?> </td>
<td> <?php echo $valor['Emprestimo']['data']; ?> </td>
<td> <?php echo $valor['Emprestimo']['hora']; ?> </td>
<td> <?php echo $valor['Laboratorio']['nome']; ?> </td>
<td> <?php echo $valor['User']['nome']; ?> </td>
<td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Emprestimo']['id']));?> </td>
<!--<td> <?php //echo $this->Html->link('Remover',array('action' => 'delete', $valor['Emprestimo']['id']));?> </td> -->
</tr>
<?php endforeach ?>
</table>
</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova requisição'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar requisições'), array('action' => 'index')); ?> </li>
	</ul>
  <!--<h3><?php //echo __('Subcategoria'); ?></h3>
  <ul>
		<li><?php //echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?> </li>
	</ul>
  <h3><?php //echo __('Componente'); ?></h3>
  <ul>
    <li><?php //echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
	</ul>-->
</div>

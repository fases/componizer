<div class="categoria view">
<fieldset>
  <legend> Categorias </legend>
<table>
  <tr><th> Nome </th>
  <th> Descrição </th>
  <th> Ações </th></tr>
  <?php foreach ($categories as $valor): ?>
  <tr>
	<td> <?php echo $this->Html->link($valor['Categoria']['nome'],array('action' => 'view', $valor['Categoria']['id'])) ?> </td>
  <td> <?php echo $valor ['Categoria']['descricao']; ?> </td>
  <td class="actions"> 
      <?php echo $this->Html->link('Associar Subcategoria',array('controller' => 'Subcategorias','action' => 'add', $valor['Categoria']['id']));?>
      <?php echo $this->Html->link('Abrir',array('action' => 'view', $valor['Categoria']['id'])) ?>
      <?php echo $this->Html->link('Editar',array('action' => 'edit', $valor['Categoria']['id'])) ?>
      <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Categoria']['id']))?></td>
  </tr>
  <?php endforeach; ?>
</table>
</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Categoria'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova categoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar categorias'), array('action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Subcategoria'); ?></h3>
  <ul>
    <ul>
      <li><?php echo $this->Html->link(__('Nova subcategoria'), array('controller' => 'subcategorias', 'action' => 'add')); ?></li>
  		<li><?php echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias', 'action' =>'index')); ?> </li>
  	</ul>
	</ul>
  <h3><?php echo __('Componente'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Novo componente'), array('controller' => 'componentes', 'action' =>  'add')); ?></li>
    <li><?php echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
	</ul>
</div>

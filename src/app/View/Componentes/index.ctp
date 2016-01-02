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
<th> Quantidade </th>
<th> Ações </th>
</tr>
<?php foreach ($componentes as $valor): ?>
  <tr>

    <td> <?php echo $this->Html->link($valor['Componente']['nome'], array('action' => 'view', $valor['Componente']['id'])); ?> </td>
    <td> <?php echo $this->Html->link($valor['Categoria']['nome'],array('controller' => 'Categorias','action' => 'view',$valor['Categoria']['id'])); ?> </td>
    <td> <?php echo $this->Html->link($valor['Subcategoria']['nome'],array('controller' => 'Subcategorias','action' => 'view',$valor['Subcategoria']['id'])); ?> </td>
    <td> <?php echo $valor ['Componente']['descricao']; ?> </td>
    <td> <?php echo $valor ['Componente']['linha']; ?> </td>
    <td> <?php echo $valor ['Componente']['coluna']; ?> </td>
    <td> <?php echo $valor ['Componente']['quantidade']; ?> </td>
    <td class="actions">
    <?php echo $this->Html->link('Abrir', array('action' => 'view', $valor['Componente']['id']));?>
    <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Componente']['id']));?>
    <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Componente']['id']));?> </td>
  </tr>
<?php endforeach; ?>
</table>
<p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de um total de {:count}, começando em {:start}, terminando em {:end}')
    ));
    ?>  </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
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

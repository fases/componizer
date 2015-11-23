<div class="subcategoria view">
    <fieldset>
        <legend> Subcategorias </legend>
        <table>
            <tr><th> ID </th>
                <th> Nome </th>
                <th> Descrição </th>
                <th> Categoria </th>
                <th> Ações</th></tr>
  <?php foreach ($subcategories as $valor): ?>
            <tr>
                <td> <?php echo $valor ['Subcategoria']['id']; ?> </td>
                <td> <?php echo $this->Html->link($valor['Subcategoria']['nome'],array('action' => 'view',$valor['Subcategoria']['id'])); ?> </td>
                <td> <?php echo $valor ['Subcategoria']['descricao']; ?> </td>
                <td> <?php echo $this->Html->link($valor['Categoria']['nome'],array('controller' => 'Categorias','action' => 'view',$valor['Categoria']['id'])); ?> </td>
                <td class="actions">
          <?php echo $this->Html->link('Associar Componente',array('controller' => 'Componentes','action' => 'add', $valor['Subcategoria']['id']));?>
       <?php echo $this->Html->link(__('Abrir'), array('action' => 'view', $valor['Subcategoria']['id'])); ?>
       <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $valor['Subcategoria']['id'])); ?>
       <?php echo $this->Html->link(__('Excluir'), array('action' => 'delete', $valor['Subcategoria']['id']), array('confirm' => __('Tem certeza que deseja excluir # %s?', $valor['Subcategoria']['nome']))); ?>
                </td>
            </tr>
  <?php endforeach; ?>
        </table>
    </fieldset>
</div>
<div class="actions">
    <h3><?php echo __('Subcategoria'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Nova subcategoria'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar subcategorias'), array('action' => 'index')); ?> </li>
    </ul>
    <h3><?php echo __('Categoria'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Nova categoria'), array('controller' => 'categorias','action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar categorias'), array('controller' => 'categorias','action' => 'index')); ?> </li>
    </ul>
    <h3><?php echo __('Componente'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo componente'), array('controller' => 'componentes','action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
    </ul>
</div>
<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
</div>
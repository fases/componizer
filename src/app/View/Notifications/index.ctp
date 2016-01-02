<div class= "notificacoes view">
    <fieldset>
        <legend> Notificações </legend>
        <table>
            <tr>
                <th> ID </th>
                <th> Emprestimo </th>
                <th> Componente </th>
                <th> Quantidade </th>
            </tr>
<?php foreach ($notifications as $valor): ?>
            <tr>
                <td> <?php echo $this->Html->link($valor['Notification']['id'],array('action' => 'view',$valor['Emprestimo']['id'])); ?> </td>
                <td> <?php echo $valor['Notification']['emprestimo_id']; ?> </td>
                <td> <?php echo $valor['Notification']['componente_id']; ?> </td>
                <td> <?php echo $valor['Notification']['quantidade']; ?> </td>
                <td class="actions">
	<?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Notification']['id']));?>
    <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Notification']['id']));?>
                </td>
            </tr>
<?php endforeach ?>
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
    </fieldset>
</div>
<div class="actions">
    <h3><?php echo __('Notification'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Nova notificação'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar notificações'), array('action' => 'index')); ?> </li>
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

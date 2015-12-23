<div class= "solicitacao view">
    <fieldset>
        <legend> Solicitações </legend>
        <table>
            <tr>
                <th> ID </th>
                <th> Horário </th>
                <th> Turno </th>
                <th> Local </th>
                <th> Solicitante </th>
                <th> Ações </th>
            </tr>
<?php foreach ($emprestimos as $valor): ?>
            <tr>
                <td> <?php echo $this->Html->link($valor['Emprestimo']['id'],array('action' => 'view',$valor['Emprestimo']['id'])); ?> </td>
                <td> <?php echo $valor['Emprestimo']['horario']; ?> </td>
                <td> <?php echo $valor['Emprestimo']['turno']; ?> </td>
                <td> <?php echo $this->Html->link($valor['Laboratorio']['nome'],array('controller' => 'Laboratorios','action' => 'view',$valor['Laboratorio']['id'])); ?> </td>
                <td> <?php echo $this->Html->link($valor['User']['nome'],array('controller' => 'Users','action' => 'view',$valor['User']['id'])); ?> </td>
                <td class="actions">
	<?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Emprestimo']['id']));?>
  <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Emprestimo']['id']));?>
                </td>
            </tr>
<?php endforeach ?>
        </table>
    </fieldset>
</div>
<div class="actions">
    <h3><?php echo __('Solicitação'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Nova solicitação'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar solicitações'), array('action' => 'index')); ?> </li>
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

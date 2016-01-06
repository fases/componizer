<div class= "solicitacao view">
    <fieldset>
        <legend> Solicitações </legend>
        <table>
            <tr>
                <th> ID </th>
                <th> Horário </th>
                <th> Turno </th>
                <th> Data da Aula </th>
                <th> Estado </th>
                <th> Status </th>
                <th> Solicitante </th>
                <th> Ações </th>
            </tr>
<?php foreach ($emprestimos as $valor): ?>
            <tr>
                <td> <?php echo $this->Html->link($valor['Emprestimo']['id'],array('action' => 'view',$valor['Emprestimo']['id'])); ?> </td>
                <td> <?php echo $valor['Emprestimo']['horario']; ?> </td>
                <td> <?php echo $valor['Emprestimo']['turno']; ?> </td>
                <td> <?php echo $valor['Emprestimo']['data_aula'];?></td>
                <td> <?php echo ($valor['Emprestimo']['estado'] == 0 ?'Aberta':'Finalizada'); ?></td>
                <td> <?php echo ($valor['Emprestimo']['notificar'] == 1?'Disponível':($valor['Emprestimo']['notificar'] == 2?'Parcialmente Disponível':'Indisponível')); ?> </td>
                <td> <?php echo $this->Html->link($valor['User']['nome'],array('controller' => 'Users','action' => 'view',$valor['User']['id'])); ?> </td>
                <td class="actions">
  <?php echo $this->Html->link ('Notificar',array('action' => 'notify',$valor['Emprestimo']['id'])); ?>
  <?php echo $this->Html->link ('Finalizar',array('action' => 'end',$valor['Emprestimo']['id'])); ?>
  <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Emprestimo']['id']));?>
  <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Emprestimo']['id']));?>
                </td>
            </tr>
<?php endforeach ?>
        </table>
    </fieldset>
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
    <h3><?php echo __('Solicitações'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Nova solicitação'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar solicitações'), array('action' => 'index')); ?> </li>
    </ul>
</div>

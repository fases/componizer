<div class= "solicitacao view">
    <fieldset>
        <legend> Solicitações </legend>
        <table>
            <tr>
                <th> Componente </th>
                <th> Quantidade </th>
            </tr>
            <?php foreach ($campos as $valor): ?>
            <tr>
                <td> <?php echo $this->Html->link($valor['Componente']['nome'],array('action' => 'view',$valor['Componente']['id'])); ?> </td>
                <td> <?php echo $valor['Notification']['quantidade']; ?> </td>
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

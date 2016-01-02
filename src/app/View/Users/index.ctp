<div class="user view">
    <fieldset>
        <legend> Usuários </legend>
<?php if ($this->Session->read('Auth.User')): ?>
        <p> Você está logado como: <b><?php echo $this->Session->read('Auth.User.nome'); ?></b> <p>
        <p><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout'));?> </p>
<?php endif; ?>
    </fieldset>
    <table>
        <tr><th> ID </th>
            <th> Nome </th>
            <th> Usuário </th>
            <th> Senha </th>
            <th> Tipo </th>
            <th> Ações </th>
        </tr>
  <?php foreach ($users as $valor): ?>
        <tr>
            <td> <?php echo $valor ['User']['id']; ?> </td>
            <td> <?php echo $this->Html->link($valor['User']['nome'], array('action' => 'view', $valor['User']['id'])); ?> </td>
            <td> <?php echo $valor ['User']['username']; ?> </td>
            <td> <?php echo $valor['User']['password']; ?> </td>
            <td> <?php echo $valor['User']['role'] == 0 ?'Professor':($valor['User']['role'] == 1? 'Bolsista':'Administrador'); ?> </td>
            <td class="actions">
			     <?php echo $this->Html->link(__('Abrir'), array('action' => 'view', $valor['User']['id'])); ?>
			     <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $valor['User']['id'])); ?>
			     <?php echo $this->Html->link(__('Excluir'), array('action' => 'delete', $valor['User']['id']), array('confirm' => __('Tem certeza que deseja excluir o usuário %s?', $valor['User']['nome']))); ?>
            </td>
        </tr>
  <?php endforeach?>
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
    <h3><?php echo __('Usuários'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo usuário'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar usuários'), array('action' => 'index')); ?> </li>
    </ul>
</div>
<p>
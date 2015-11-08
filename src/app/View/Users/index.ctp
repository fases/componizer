<div class="user view">
<fieldset>
<legend> Usuários </legend>
<?php if ($this->Session->read('Auth.User')): ?>
<p> Você está logado como: <b><?php echo $this->Session->read('Auth.User.username'); ?></b> <p>
<p><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout'));?> </p>
<?php endif; ?>
</fieldset>
<table>
  <tr><th> ID </th>
  <th> Nome </th>
  <th> Usuário </th>
  <th> Tipo </th>
  <!--<th> Editar </th>
  <th> Remover </th> -->
</tr>
  <?php foreach ($users as $valor): ?>
    <tr>
      <td> <?php echo $valor ['User']['id']; ?> </td>
      <td> <?php echo $this->Html->link($valor['User']['nome'], array('action' => 'view', $valor['User']['id'])); ?> </td>
      <td> <?php echo $valor ['User']['username']; ?> </td>
      <!--<td> <?php //echo $valor['User']['password']; ?> </td>
      <td> <?php //echo $valor["User"]["email"]; ?> </td>
      <td> <?php //echo $valor ["User"]["telefone"]; ?> </td> -->
      <td> <?php echo $valor ["User"]["role"]; ?> </td>
      <td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['User']['id']));?> </td>
      <td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['User']['id']));?> </td>
   </tr>
  <?php endforeach?>
</table>
</div>
<div class="actions">
	<h3><?php echo __('Usuários'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo usuário'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuários'), array('action' => 'index')); ?> </li>
	</ul>
</div>

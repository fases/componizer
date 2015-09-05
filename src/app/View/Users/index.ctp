<fieldset>
  <legend> Usuários </legend>
<?php if ($this->Session->read('Auth.User')): ?>
<p> Você está logado como: <b><?php echo $this->Session->read('Auth.User.username'); ?></b> <p>
<p><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout'));?> </p>
<?php endif; ?>
</fieldset>
<p><?php echo $this->Html->link('Adicionar usuário',array('action' => 'add'));?></p>
<table>
  <tr><th> ID </th>
  <th> Nome </th>
  <th> Usuário </th>
  <th> Senha </th>
  <th> E-mail </th>
  <th> Telefone </th>
  <th> Tipo de usuário </th></tr>
  <?php foreach ($users as $valor): ?>
    <tr>
      <td> <?php echo $valor['User']['id']; ?> </td>
      <td> <?php echo $this->Html->link($valor['User']['nome'], array('action' => 'view', $valor['User']['id'])); ?> </td>
      <td> <?php echo $valor ['User']['username']; ?> </td>
      <td> <?php echo $valor['User']['password']; ?> </td>
      <td> <?php echo $valor["User"]["email"]; ?> </td>
      <td> <?php echo $valor ["User"]["telefone"]; ?> </td>
      <td> <?php echo $valor ["User"]["role"]; ?> </td>
      <td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['User']['id']));?> </td>
      <td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['User']['id']));?> </td>
    </tr>
  <?php endforeach?>
</table>

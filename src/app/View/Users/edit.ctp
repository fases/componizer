<div class="user view">
<h1> Editar usuário </h1>
<?php
  echo $this->Form->create('User',array('action' => 'edit'));
  echo $this->Form->input('nome');
  echo $this->Form->input('username');
  echo $this->Form->input('password');
  echo $this->Form->input('email');
  echo $this->Form->input('telefone');
  echo $this->Form->input('role', array(
    'options' => array('Professor','Bolsista','Administrador')));
  echo $this->Form->end("Editar");
?>
</div>
<div class="actions">
	<h3><?php echo __('Usuários'); ?></h3>
	<ul>
	<!--	<li><?php //echo $this->Html->link(__('Novo usuário'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('Listar usuários'), array('action' => 'index')); ?> </li>
	</ul>
</div>

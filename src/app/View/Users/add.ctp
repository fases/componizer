<div class="user view">
<h1> Adicionar Usuário </h1>
<?php
  echo $this->Form->create('User',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->input('username',array('label' => 'Matricula'));
  echo $this->Form->input('password');
  echo $this->Form->input('email');
  echo $this->Form->input('telefone');
  echo $this->Form->input('role', array('label' => 'Tipo de Usuário',
    'options' => array('Professor','Bolsista','Administrador')));
  echo $this->Form->end("Cadastrar");
?>
</div>
<div class="actions">
	<h3><?php echo __('Usuários'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo usuário'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuários'), array('action' => 'index')); ?> </li>
	</ul>
</div>

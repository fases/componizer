<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('Criar Notificação'); ?></legend>
	<?php
		echo $this->Form->input('emprestimo_id');
		echo $this->Form->input('componente_id');
		echo $this->Form->input('quantidade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Notificação'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Emprestimos'), array('controller' => 'emprestimos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Emprestimo'), array('controller' => 'emprestimos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
	</ul>
</div>

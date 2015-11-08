<div class="lab view">
<fieldset>
<legend> Cadastrar Laboratórios </legend>
<?php
  echo $this->Form->create('Laboratorio',array('action' => 'add'));
  echo $this->Form->input('nome');
  echo $this->Form->end('Cadastrar');
?>
</div>
<div class="actions">
	<h3><?php echo __('Laboratórios'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar laboratórios'), array('action' => 'index')); ?> </li>
	</ul>

	</ul>
</fieldset>
</div>

<div class="lab view">
<h1> Editar laboratórios </h1>
<?php
    echo $this->Form->create('Laboratorio', array('action' => 'edit'));
	  echo $this->Form->input('nome');
          echo $this->Form->input('sala');
    echo $this->Form->end('Editar');
?>
</div>
<div class="actions">
	<h3><?php echo __('Laboratório'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar laboratórios'), array('action' => 'index')); ?> </li>
	</ul>
</div>

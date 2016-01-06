<div class="emprestimos view">
<h1> Notificar solicitação </h1>
<?php
    echo $this->Form->create('Emprestimo', array('action' => 'notify'));
    echo $this->Form->input('horario',array('type' => 'hidden'));
    echo $this->Form->input('turno',array('type' => 'hidden'));
    echo $this->Form->input('data_aula',array('type' => 'hidden'));
    echo $this->Form->input('user_id',array('type' => 'hidden'));
    echo $this->Form->input('laboratorio_id',array('type' => 'hidden'));
    echo $this->Form->input('estado',array('type' => 'hidden'));
    echo $this->Form->input('observacoes',array('rows' => '5'));
    echo $this->Form->input('notificar',array('options' => array(1 => 'Disponível',2 => 'Parcialmente Disponível',3 => 'Índisponível'),'label' => 'Status'));
    echo $this->Form->end('Salvar');
?>

</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Solicitações'), array('action' => 'index')); ?> </li>
	</ul>
</div>
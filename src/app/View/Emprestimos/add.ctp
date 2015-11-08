<div class="requisicoes view">
<fieldset>
<legend> Criar Requisição </legend>
<?php
  echo $this->Form->create('Emprestimo',array('action' => 'add'));
  echo $this->Form->input('data', array(
          'label' => 'Data da aula',
          'type' => 'date','dateFormat' => 'DMY'
  ));
  echo $this->Form->input('hora',array(
        'label' => 'Hora da aula',
        'type' => 'time', 'selected' => '13:30:00'));
  echo $this->Form->input('nome_id', array('type' => 'select', 'options' => $laboratorio, 'label' => 'Local'));
  echo $this->Form->input('username_id',array('type' => 'select','options' => $user,'label' => 'Solicitante'));
  echo $this->Form->input('objetivo');
  echo $this->Form->input('observacoes');
  echo $this->Form->input('material');
  echo $this->Form->end('Requisitar');
?>
</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar requições'), array('action' => 'index')); ?> </li>
	</ul>

	</ul>
</fieldset>
</div>

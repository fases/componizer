<div class="requisicoes view">
    <fieldset>
        <legend> Criar Requisição </legend>
<?php
  echo $this->Form->create('Emprestimo',array('action' => 'add'));
  echo $this->Form->input('horario',
        array('options' => array(1 => '1º Horário',2 => '2º Horário',3 => '3º Horário',4 => '4º Horário',
            5 => '5º Horário',6 => '6º Horário')));
  $turno = array('Matutino','Vespertino','Noturno');
  echo $this->Form->input('turno', 
          array('options' => array('matutino' => 'Matutino','vespertino' => 'Vespertino','noturno' => 'Noturno'),'label' => 'Turno')
  );
  echo $this->Form->input('user_id',array('type' => 'select','options' => $user,'label' => 'Solicitante'));
  echo $this->Form->input('laboratorio_id', array('type' => 'select', 'options' => $laboratorio, 'label' => 'Local'));
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

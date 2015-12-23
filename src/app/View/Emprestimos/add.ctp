<div class="Solicitacao view">
    <fieldset>
        <legend> Criar Solicitação </legend>
<?php
  echo $this->Form->create('Emprestimo',array('action' => 'add'));
  echo $this->Form->input('turno', 
          array('options' => array('Matutino' => 'Matutino','Vespertino' => 'Vespertino','Noturno' => 'Noturno'),'label' => 'Turno'));
  $turno = array('Matutino','Vespertino','Noturno');
  echo $this->Form->input('data_aula', array( 'label' => 'Data da Aula','type' => 'date', 
   'dateFormat' => 'DMY', 
   'minYear' => date('Y') - 0,
   'maxYear' => date('Y') + 5 ));
  echo $this->Form->input('user_id',array('type' => 'select','options' => $user,'label' => 'Solicitante'));
  echo $this->Form->input('laboratorio_id', array('type' => 'select', 'options' => $laboratorio, 'label' => 'Local'));
  echo $this->Form->input('observacoes',array('label' => 'Observações','rows' => '5'));
  echo $this->Form->end('Solicitar');
?>
</div>
<div class="actions">
    <h3><?php echo __('Requisição'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Listar solicitações'), array('action' => 'index')); ?> </li>
    </ul>
</ul>
</fieldset>
</div>

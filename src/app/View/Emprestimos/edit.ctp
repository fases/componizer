<div class="emprestimos view">
<h1> Editar Solicitação </h1>
<?php
    echo $this->Form->create('Emprestimo', array('action' => 'edit'));
    echo $this->Form->input('horario',
        array('options' => array(1 => '1º Horário',2 => '2º Horário',3 => '3º Horário',4 => '4º Horário',
            5 => '5º Horário',6 => '6º Horário')));
    $turno = array('Matutino','Vespertino','Noturno');
    echo $this->Form->input('turno', 
          array('options' => array('Matutino' => 'Matutino','Vespertino' => 'Vespertino','Noturno' => 'Noturno'),'label' => 'Turno'));
    echo $this->Form->input('data_aula', array( 'label' => 'Data da Aula','type' => 'date', 
   'dateFormat' => 'DMY', 
   'minYear' => date('Y') - 0,
   'maxYear' => date('Y') + 5 ));
    echo $this->Form->input('laboratorio_id', array('type' => 'select', 'options' => $laboratorio, 'label' => 'local'));
    echo $this->Form->input('user_id',array('type' => 'select','options' => $user,'label' => 'Solicitante'));
    echo $this->Form->input('observacoes',array('rows' => '5'));
    echo $this->Form->end('Salvar');
?>

</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova solicitação'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('Listar Solicitações'), array('action' => 'index')); ?> </li>
	</ul>
  <!--<h3><?php //echo __('Subcategoria'); ?></h3>
  <ul>
		<li><?php //echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?> </li>
	</ul>
  <h3><?php //echo __('Componente'); ?></h3>
  <ul>
    <li><?php //echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
	</ul>-->
</div>

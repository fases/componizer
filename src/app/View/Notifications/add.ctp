<div class="Notificações view">
    <fieldset>
        <legend> Criar Notificação </legend>
<?php
  echo $this->Form->create('Componente',array('controller' => 'componentes','action' => 'lista'));
  echo $this->Form->input('campo');
  echo $this->Js->submit('Buscar',array('url' => array('controller' => 'componentes','action' => 'lista'),'update' => '#ComponenteResultado'));
  echo $this->Form->input('resultado',array('type' => 'select'));
  echo $this->Form->input('quantidade',array('type' => 'text','value' => 0));
  echo $this->Js->submit('Adicionar',array('url' => array('controller' => 'componentes','action' => 'add_list'),'update' => '#car'));
  echo $this->Form->end();
  
  echo $this->Form->create('Notification',array('action' => 'add'));
  echo $this->Form->hidden('emprestimo_id');
  echo $this->Form->hidden('componente_id');
  echo $this->Form->input('quantidade');
  echo $this->Form->end('Cadastrar'); 
?>
<div id="car">
  
</div>
</div>
<div class="actions">
    <h3><?php echo __('Notificações'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Listar notificações'), array('action' => 'index')); ?> </li>
    </ul>
</fieldset>
<?php 
  echo $this->Html->script('Jquery',array('inline' => 'false'));
  echo $this->Js->writeBuffer(array('cache' => FALSE));
?>
<!-- <?php echo $this->Html->script('campos'); ?> -->
</div>
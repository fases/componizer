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
?>  
<div id="car">
  <?php echo $this->Form->create('Notification'); ?>
    <table>
      <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Remover</th>
      </tr>
      <?php
        if ($this->Session->check('lista')) {
          $componentes = $this->Session->read('lista');
          foreach ($componentes as $componente) {
            echo "<tr>";
              echo "<td>";
                echo $this->Form->input('componente_id',array('type' => 'text'/*,'disabled' => 'disabled'*/,'label' => false,'value' => $componente[0]));
              echo "</td>";
              echo "<td>".$componente[1]."</td>";
              echo "<td>";
                echo $this->Form->input('quantidade',array('type' => 'text','label' => false,'value' => $componente[2]));
              echo "</td>";
              echo "<td>";
                echo $this->Js->link('Remover', array('controller'=>'componentes', 'action'=>'rem_list',
                  $componente[0]),array('update'=>'#car'));
              echo "</td>";
            echo "</tr>";
          }
        }
      ?>
    </table>
<?php echo $this->Form->end('concluir');?>
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
</div>
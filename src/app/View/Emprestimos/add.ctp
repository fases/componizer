<div class="Solicitacao view">
    <fieldset>
        <legend> Criar Solicitação </legend>
<?php
  echo $this->Form->create('Emprestimo',array('action' => 'add'));
  echo $this->Form->input('Emprestimo.horario',array('options' => array('1º' => '1','2' => '2','3' => '3','4'=>'4','5'=>'5','6' => '6'),'label' => 'Horário'));
  echo $this->Form->input('Emprestimo.turno', 
          array('options' => array('Matutino' => 'Matutino','Vespertino' => 'Vespertino','Noturno' => 'Noturno'),'label' => 'Turno'));
  $turno = array('Matutino','Vespertino','Noturno');
  echo $this->Form->input('Emprestimo.data_aula', array( 'label' => 'Data da Aula','type' => 'date', 
   'dateFormat' => 'DMY', 
   'minYear' => date('Y') - 0,
   'maxYear' => date('Y') + 5 ));
  echo $this->Form->input('Emprestimo.user_id',array('type' => 'select','options' => $user,'label' => 'Solicitante'));
  echo $this->Form->input('Emprestimo.laboratorio_id', array('type' => 'select', 'options' => $laboratorio, 'label' => 'Local'));
  echo $this->Form->input('Emprestimo.observacoes',array('label' => 'Observações','rows' => '5'));
  // echo $this->Form->end('solicitar');
?>
<?php
  // echo $this->Form->create('Componente',array('controller' => 'componentes','action' => 'lista'));
  echo $this->Form->input('Componente.campo');
  echo $this->Js->submit('Buscar',array('url' => array('controller' => 'componentes','action' => 'lista'),'update' => '#ComponenteResultado'));
  echo $this->Form->input('Componente.resultado',array('type' => 'select'));
  echo $this->Form->input('Componente.quantidade',array('type' => 'text','value' => 0));
  echo $this->Js->submit('Adicionar',array('url' => array('controller' => 'componentes','action' => 'add_list'),'update' => '#car'));
  // echo $this->Form->end();
?>
<div id="car">
  <?php //echo $this->Form->create('Notification',array('controller' => 'emprestimos','action' => 'add')); ?>
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
          $indice = 0;
          foreach ($componentes as $id => $componente) {
            echo "<tr>";
              echo "<td>";
                echo $this->Form->input('Notification.'.$indice.'.componente_id',array('type' => 'text'/*,'disabled' => 'disabled'*/,'label' => false,'value' => $id));
              echo "</td>";
              echo "<td>".$componente[0]."</td>";
              echo "<td>";
                echo $this->Form->input('Notification.'.$indice.'.quantidade',array('type' => 'text','label' => false,'value' => $componente[1]));
              echo "</td>";
              echo "<td>";
                echo $this->Js->link('Remover', array('controller'=>'componentes', 'action'=>'rem_list',
                  $id),array('update'=>'#car'));
              echo "</td>";
            echo "</tr>";
            $indice++;
          }
        }
      ?>
    </table>
    <?php echo $this->Form->end('solicitar'); ?>
</div>
</div>
<div class="actions">
    <h3><?php echo __('Requisição'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Listar solicitações'), array('action' => 'index')); ?> </li>
    </ul>
</ul>
</fieldset>
<?php 
  echo $this->Html->script('Jquery',array('inline' => 'false'));
  echo $this->Js->writeBuffer(array('cache' => FALSE));
?>
</div>

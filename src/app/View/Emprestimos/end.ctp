<div class="emprestimos view">
<h1> Finalizar solicitação </h1>
<?php echo $this->Form->create('Emprestimo', array('action' => 'end')); ?>
<table>
  <tr>
    <th> Componente </th>
    <th> Quantidade </th>
    <th> Danificados </th>
  </tr> 
<?php    
    $indice = 0;
    foreach ($campos as $value) {
      echo '<tr>';
        echo $this->Form->input('Componente.'.$indice.'.id',array('label' => false,'value' => $value['Componente']['id'],'type' => 'hidden'));
        echo '<td>';
          echo $value['Componente']['nome'];
        echo '</td>';
        echo '<td>';
          echo $value['Notification']['quantidade'];
        echo '</td>';
        echo '<td>';
          echo $this->Form->input('Componente.'.$indice.'.quantidade',array('label' => false,'value' => 0));
        echo '</td>';
      echo '</tr>';
      $indice++;
    }
?>
</table>
<?php echo $this->Form->end('Finalizar');?>
</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova solicitação'), array('action' => 'add')); ?></li>
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
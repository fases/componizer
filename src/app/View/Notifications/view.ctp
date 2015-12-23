<div class="notificacoes view">
<p><small> Data: <?php echo $notificacoes['Notification']['emprestimo_id']?> </small></p>
<p><small> Hora: <?php echo $notificacoes['Notification']['componente_id']?> </small></p>
<p><small> local: <?php echo $notificacoes['Notification']['quantidade']?> </small></p>
</div>
<div class="actions">
  <h3><?php echo __('Notificações'); ?></h3>
  <ul>
    <!--<li><?php //echo $this->Html->link(__('Nova requisição'), array('action' => 'add')); ?></li> -->
    <li><?php echo $this->Html->link(__('Listar notificações'), array('action' => 'index')); ?> </li>
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
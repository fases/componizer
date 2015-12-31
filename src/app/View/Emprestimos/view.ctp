<div class="emprestimoes view">
<h1> Emprestimo: <?php echo $emprestimos['Emprestimo']['id']?></h1>
<p><small> Data da aula: <?php echo $emprestimos['Emprestimo']['data_aula']?> </small></p>
<p><small> Horário: <?php echo $emprestimos['Emprestimo']['horario']?> </small></p>
<p><small> local: <?php echo $emprestimos['Emprestimo']['user_id']?> </small></p>
<p><small> Solicitante: <?php echo $emprestimos['Emprestimo']['laboratorio_id']?> </small></p>
<p><small> Estado: <?php echo $emprestimos['Emprestimo']['estado']?> </small></p>
<p><small> Status: <?php echo $emprestimos['Emprestimo']['notificar']?> </small></p>
<p><small> Observações: <?php echo $emprestimos['Emprestimo']['observacoes']?> </small></p>
</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<!--<li><?php //echo $this->Html->link(__('Nova requisição'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('Listar requisições'), array('action' => 'index')); ?> </li>
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

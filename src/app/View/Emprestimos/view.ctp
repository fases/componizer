<div class="emprestimoes view">
<!-- <h1><?php echo $emprestimos['Emprestimo']['id']?></h1> -->
<p><small> ID: <?php echo $emprestimos['Emprestimo']['id']?> </small></p>
<p><small> Data: <?php echo $emprestimos['Emprestimo']['data']?> </small></p>
<p><small> Hora: <?php echo $emprestimos['Emprestimo']['hora']?> </small></p>
<p><small> local: <?php echo $emprestimos['Emprestimo']['nome_id']?> </small></p>
<p><small> Solicitante: <?php echo $emprestimos['Emprestimo']['username_id']?> </small></p>
<p><small> Objetivo: <?php echo $emprestimos['Emprestimo']['objetivo']?> </small></p>
<p><small> Observações: <?php echo $emprestimos['Emprestimo']['observacoes']?> </small></p>
<p><small> Material: <?php echo $emprestimos['Emprestimo']['material']?> </small></p>
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

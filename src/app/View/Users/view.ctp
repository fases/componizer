<div class="view user">
<h1><?php echo $usuario['User']['nome'];?></h1>
<p><small> Nome de usuário: <?php echo $usuario['User']['username'];?> </small></p>
<p><small> Senha: <?php echo $usuario['User']['password'];?> </small></p>
<p><small> E-mail: <?php echo $usuario['User']['email'];?> </small></p>
<p><small> Telefone: <?php echo $usuario['User']['telefone'];?> </small></p>
<p><small> Tipo de Usuário: <?php echo $usuario['User']['role'];?> </small></p>
</div>
<div class="actions">
	<h3><?php echo __('Usuários'); ?></h3>
	<ul>
		<!--<li><?php //echo $this->Html->link(__('Novo usuário'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('Listar usuários'), array('action' => 'index')); ?> </li>
	</ul>
</div>

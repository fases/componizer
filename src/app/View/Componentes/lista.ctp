<ul class="to_do">
		<?php
		if(!empty($componentes)){ 
		foreach ($componentes as $componente): ?>
    <li><p>
			<?php echo $this->Js->submit('Adicionar',array('url' => array('controller' => 'componentes','action' => 'add_list',$componente['Componente']['id']),'update' => '#car','class' => 'btn btn-primary btn-xs','div' => false)); ?>
            <a class="flat"><?php echo $componente['Componente']['nome'].' - '.$componente['Categoria']['nome']; ?></a></p>  
		<?php endforeach; 
		}else{ ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong> Alerta,</strong> Não existem componentes com o nome buscado!
        </div>
		<?php }
		?>
</ul>    
<?php 
                  echo $this->Html->script('jquery');
                  echo $this->Js->writeBuffer();

                ?>
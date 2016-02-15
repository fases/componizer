							<?php 
								if(isset($aviso)){ ?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
                                    	<?php echo $aviso; ?>
</div>	
								<?php }

							?>
<table class="table hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
        </tr>
    </thead>
                                        <?php
                                        echo $this->Form->create('Notification',array('action' => 'add'));
                                        $indice = 0;
                                        foreach ($componentes as $id => $componente): ?>
    <tbody>
        <tr>
                                            	<?php  echo $this->Form->input('Notification.'.$indice.'.componente_id',array('type' => 'text','label' => false,'value' => $id,'type' => 'hidden')); ?>
            <td><?php echo $componente[0]; ?></td>
            <td><?php echo $this->Form->input('Notification.'.$indice.'.quantidade',array('type' => 'text','label' => false,'value' => $componente[1],'class' => 'form-control')); ?></td>
                                                <?php  echo $this->Form->input('Notification.'.$indice.'.emprestimo_id',array('type' => 'text','label' => false,'value' => $this->Session->read('Emprestimo_id'),'type' => 'hidden')); ?>
            <td><?php
                                                echo $this->Js->submit('Remover',array('url' => array('controller' => 'componentes','action' => 'rem_list',$id),'update' => '#car','class' => 'btn btn-warning btn-xs')); ?>
        </tr>
                                            <?php $indice++; ?>
    </tbody>
                                        <?php endforeach; ?>
</table>
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                              <?php 
                                              
                                              $options = array('label' => 'Concluir', 'class' => 'btn btn-success','div' => false);
                                              echo $this->Form->end($options);
                                              echo $this->Html->link('Cancelar',array('controller' => 'emprestimos','action' => 'profile'),array('class' => 'btn btn-danger'));
                                            //} ?>
</div>                              

                <?php 
                  echo $this->Html->script('jquery');
                  echo $this->Js->writeBuffer();

                ?>
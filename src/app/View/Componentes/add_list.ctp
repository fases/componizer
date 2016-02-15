<?php 
	// if(isset($aviso)){
	// 	echo "<div id='flashMessage' class='message'> $aviso </div>";	
	// }
	// echo "<table>";
	// echo "<tr>";
	// 	echo "<th> Nome </th>";
	// 	echo "<th> Quantidade </th>";
	// 	echo "<th> Remover </th>";
	// echo "</tr>";
	// if(!is_null($componentes)){
	// 	echo $this->Form->create('Notification',array('controller' => 'emprestimos','action' => 'add')); 
	// 	$indice = 0;
 //          foreach ($componentes as $id => $componente) {
 //            echo "<tr>";
 //             echo $this->Form->input('Notification.'.$indice.'.componente_id',array('type' => 'text'/*,'disabled' => 'disabled'*/,'label' => false,'value' => $id,'type' => 'hidden'));
 //              echo "<td>".$componente[0]."</td>";
 //              echo "<td>";
 //                echo $this->Form->input('Notification.'.$indice.'.quantidade',array('type' => 'text','label' => false,'value' => $componente[1]));
 //              echo "</td>";
 //              echo "<td>";
 //                echo $this->Js->link('Remover', array('controller'=>'componentes', 'action'=>'rem_list',
 //                  $id),array('update'=>'#car'));
 //              echo "</td>";
 //            echo "</tr>";
 //            $indice++;
 //          }
	// 	echo "</table>";
	// 	echo $this->Form->end('Concluir');	
	// }
?>
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
                                                echo $this->Js->submit('Remover',array('url' => array('controller' => 'componentes','action' => 'add_list',$id),'update' => '#car','class' => 'btn btn-warning btn-xs')); ?>
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
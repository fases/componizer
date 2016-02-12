  <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Componente <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php echo $this->Form->input('Componente.campo',array('label' => false, 'class' => 'form-control')); ?>
                                        </div>
                                    </div>
                                  <!--  <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-3">

                                            $options = array('label' => 'Buscar', 'class' => 'btn btn-round btn-default', 'url' => array('controller' => 'componentes','action' => 'lista'),'update' => '#ComponenteResultado');
                                            echo $this->Form->end($options);
                                         </div>
                                    </div>-->
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Resultado</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php echo $this->Form->input('Componente.resultado',array('type' => 'select', 'class' => 'form-control', 'label' => false));?>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantidade <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php echo $this->Form->input('Componente.quantidade',array('class' => 'form-control','label' =>false,'type' => 'number','placeholder' => 0));?>
                                        </div>
                                    </div>
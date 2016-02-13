<body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <?php echo $this->Form->create('User',array('action' => 'recovery'));?>
                        <h1>Acessar</h1>
                        <div>
                             <?php echo $this->Session->flash(); ?>
                        </div>
                        <div>
                            <?php echo $this->Form->input('matricula',array('class' => 'form-control','placeholder'=> 'Matricula','label' => false)); ?>
                        </div>
                        <div>
                            <?php echo $this->Form->input('email',array('class' => 'form-control','placeholder'=> 'Email','label' => false)); ?>
                        </div>
                        <div>
                            <a>
                            <?php
                                $options = array('label' => 'Entrar', 'class' => 'btn btn-default submit', 'div' => false);
                                echo $this->Form->end($options);
                            ?></a>
                            <a class="reset_pass" href="#">Esqueceu sua senha?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Componizer!</h1>

                                <p>©2015 All Rights Reserved. Componizer! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

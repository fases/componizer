<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Componizer | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body style="background:rgba(52, 73, 94, 0.94);">
  <div class="top_nav">

      <div class="nav_barra">
          <nav class="" role="navigation">
              <div class="nav toggle">
                <?php echo $this->Html->image("CComp.png",
                array("alt" => "Logo", 'class' => 'img_logo'),
                array('escape' => false)); ?>
              </div>

            <!--  <ul class="nav navbar-nav navbar-right">
                  <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <img src="images/img.jpg" alt=""><i class="fa fa-user"></i>
                          <?php //echo $this->Session->read('Auth.User.nome'); ?>
                          <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li><?php //echo $this->Html->link(__('Meus dados'), array('controller' => 'users','action' => 'profile')); ?>
                          </li>
                          <li><?php //echo $this->Html->link(__('Alterar senha'), array('controller' => 'users','action' => 'password')); ?>
                          </li>
                          <li><?php //echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout'));?><i class="fa fa-sign-out pull-right"></i>
                          </li>
                      </ul>
                    </li>
                </ul>-->
            </nav>
        </div>
    </div>

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <?php echo $this->Form->create('User',array('action' => 'login'));?>
                        <h1>Acessar</h1>
                        <div>
                             <?php echo $this->Session->flash(); ?>
                        </div>
                        <div>
                            <?php echo $this->Form->input('username',array('class' => 'form-control','placeholder'=> 'Usuário','label' => false)); ?>
                        </div>
                        <div>
                            <?php echo $this->Form->input('password',array('class' => 'form-control','placeholder'=> 'Senha','label' => false)); ?>
                        </div>
                        <div>
                            <a>
                            <?php
                                $options = array('label' => 'Entrar', 'class' => 'btn btn-default submit', 'div' => false);
                                echo $this->Form->end($options);
                            ?></a>
                            <?php echo $this->Html->link(__('Esqueceu sua senha?'), array( 'controller' => 'users','action' => 'recovery'));?>
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

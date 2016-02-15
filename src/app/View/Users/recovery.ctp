<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Componizer</title>

    <meta name="keywords" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,100%7CRoboto:400,700,300,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link href="../home/css/font-awesome.css" rel="stylesheet">
    <link href="../home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme stylesheet -->
    <link href="../home/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="../home/css/custom.css" rel="stylesheet">

    <!-- owl carousel css -->

    <link href="../home/css/owl.carousel.css" rel="stylesheet">
    <link href="../home/css/owl.theme.css" rel="stylesheet">

    <!-- CSS Animations -->
    <link href="../home/css/animate.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Mordernizr -->
    <script src="../home/js/modernizr-2.6.2.min.js"></script>

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="120">

    <!-- *** NAVBAR ***
_________________________________________________________ -->
    <div>
    <br>
    <br>
    </div>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="row">
                <div class="col-md-4">
                <img src="../home/img/logo.jpg" class='pull-left image img-responsive' width='70' style="padding-top: 5px;" height='70'></div>
                <div class="col-md-8">
                <a class="navbar-brand scrollTo" href="#intro" style="color: #094377;">
                Componizer</a>
                </div>
                </div>
            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-right">
                    <!--<li class="active"><a href="#intro">Inicial</a>
                    </li>
                    <li><a href="#about">Sobre</a>
                    </li>
                    <li><a href="#services">Serviços</a>
                    </li>
                    <li><a href="#testimonials">Login</a>
                    </li>
                    <li><a href="#references">My work</a>
                    </li>
                    <li><a href="#customers">Clients</a>
                    </li>
                    <li><a href="#contact">Login</a>
                    </li>-->
                </ul>
            </div>
            <!--/.nav-collapse -->

        </div>
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->


    <div id="all">


        <!-- *** INTRO IMAGE ***
_________________________________________________________ -->
<!--_________________________________________________________ -->

<div class="section contact" id="contact" data-animate="bounceIn">
    <div class="container">
        <div class="col-md-12">


            <h2 class="title">RECUPERAR SENHA</h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
            <?php echo $this->Session->flash(); ?>
            </div>
            </div>
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                        <div class="messages">

                        </div>

                        <div class="controls">
                          <?php echo $this->Form->create('User',array('action' => 'recovery'));?>
                            <div class="row">
                              <div>
                              </div>
                                <div class="col-md-12">
                                  <?php echo $this->Form->input('matricula',array('class' => 'form-control','placeholder'=> 'Matricula','label' => false)); ?>
                                </div>
                                <div class="col-md-12">
                                  <?php echo $this->Form->input('email',array('class' => 'form-control','placeholder'=> 'Email','label' => false)); ?>
                                </div>
                                <div class="col-md-12 text-center">
                                  <a>
                                  <?php
                                      $options = array('label' => 'Enviar', 'class' => 'btn btn-info btn-lg', 'div' => false);
                                      echo $this->Form->end($options);
                                  ?></a>
                                </div>
                                <!--<div class="pull-right">
                                  <?php //echo $this->Html->link(__('Esqueceu sua senha?'), array('controller' => 'users','action' => 'recovery'));?>
                                </div>-->
                            </div>
                        </div>
                </div>

            </div>

        </div>
        <!-- /.12 -->
    </div>
    <!-- /.container -->
</div>
<!-- /.section -->

<!-- *** CONTACT END *** -->

<!-- *** MAP ***
_________________________________________________________ -->

        <!--<div class="section" id="map">

        </div>-->
        <!-- /.section -->

        <!-- *** MAP END *** -->

        <!-- *** FOOTER ***
_________________________________________________________ -->

        <div class="section" id="footer">
            <div class="container">

                <div class="row">

                    <!--<div class="col-sm-6">

                        <p class="social">
                            <a href="#" class="external facebook" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>-->
                            <!--<a href="#" class="external instagram" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>-->
                      <!--  </p>
                    </div>-->
                    <!-- /.6 -->

                    <div class="col-sm-6">
                        <p>&copy; 2015 Componizer. All rights reserved.</p>
                    </div>

                    <!--<div class="col-sm-12">
                        <p class="template-bootstrapious">Template by <a href="http://www.bootstrapious.com">Bootstrap Templates</a> with support from <a href="http://kakusei.cz">Designový nábytek</a>
                        </p>
                    </div>-->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** FOOTER END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <!-- js base -->
    <script src="../home/js/jquery-1.11.0.min.js"></script>
    <script src="../home/js/bootstrap.min.js"></script>

    <!-- for demo purpose -->
    <script src="../home/js/jquery.cookie.js"></script>

    <!-- waypoints for scroll spy -->
    <script src="../home/js/waypoints.min.js"></script>

    <!-- maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="../home/js/gmaps.js"></script>

    <!-- masonry layout -->
    <script src="../home/js/masonry.pkgd.min.js"></script>

    <!-- owl carousel -->
    <script src="../home/js/owl.carousel.min.js"></script>


    <!-- jQuery scroll to -->
    <script src="../home/js/jquery.scrollTo.min.js"></script>

    <!-- jQuery counter -->
    <script src="../home/js/jquery.counterup.min.js"></script>

    <!-- jQuery parallax -->
    <script src="../home/js/jquery.parallax-1.1.3.js"></script>

    <!-- main js file -->

    <script src="../home/js/front.js"></script>





</body>

</html>

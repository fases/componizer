<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->
    <?php 
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('fonts/css/font-awesome.min');
        echo $this->Html->css('animate.min');
        echo $this->Html->css('custom');
        echo $this->Html->css('icheck/flat/green');
    	echo $this->Html->css('jquery.min');
    ?>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">

        <div class="main_container">

            <!-- page content -->
            <div class="col-md-12">
                <div class="col-middle">
                    <div class="text-center text-center">
                        <h1 class="error-number">500</h1>
                        <h2>Desculpe, mas não foi possível achar essa funcionalidade</h2>
                        </p>
                        <div class="mid_center">
                            <div style="border: 0; background: white;" class="col-md-12">
                        <?php echo $this->Html->link($this->Html->image("componizer.png",
                        array("alt" => "Logo", 'class' => 'img-rounded img-responsive')),
                        array('controller' => 'emprestimos','action' => 'profile'),
                        array('escape' => false)); ?>

                          <!--  <a class="site_title"><span>Componizer</span></a>-->

                  		</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

        </div>
        <!-- footer content -->
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <?php
    	echo $this->Html->script('bootstrap.min');
    	echo $this->Html->css('chartjs/chart.min');
    	echo $this->Html->css('progressbar/bootstrap-progressbar.min');
    	echo $this->Html->css('nicescroll/jquery.nicescroll.min');
    	echo $this->Html->css('icheck/icheck.min');
    	echo $this->Html->css('custom');
    ?>
</body>

</html>

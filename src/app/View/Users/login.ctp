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
                    <li class="active"><a href="#intro">Inicial</a>
                    </li>
                    <li><a href="#about">Sobre</a>
                    </li>
                    <li><a href="#services">Serviços</a>
                    </li>
                    <!--<li><a href="#testimonials">Login</a>
                    </li>
                    <li><a href="#references">My work</a>
                    </li>
                    <li><a href="#customers">Clients</a>-->
                    </li>
                    <li><a href="#login">Login</a>
                    </li>
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
        <!-- <div id="intro" class="clearfix">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="carousel-caption"> -->
                        <div id="intro">
                             <?php echo $this->Html->image('../home/img/home2.jpg',array('class' => 'img img-responsive')); ?>
                        </div>
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- *** INTRO IMAGE END *** -->

        <!-- *** ABOUT ***
_________________________________________________________ -->
        <div class="section" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <h2 class="title" data-animate="fadeInDown">Sobre</h2>
                    </div>

                    <div class="col-sm-12">

                        <div class="row">

                            <div class="col-sm-6 text-left" data-animate="fadeInUp">

                                <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can
                                    admiration prosperous now devonshire diminution law.</p>

                                <p>Received overcame oh sensible so at an. Formed do change merely to county it. <strong>Am separate contempt</strong> domestic to to oh. On relation my so addition branched. Put hearing cottage she norland letters equally prepare
                                    too. Replied exposed savings he no viewing as up. Soon body add him hill. No father living really people estate if. Mistake do produce beloved demesne if am pursuit.</p>

                                <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can
                                    admiration prosperous now devonshire diminution law.</p>

                            </div>

                            <div class="col-sm-6" data-animate="fadeInUp">

                                <div class="skill-item">
                                    <div class="progress-title">
                                        PHP
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-skill1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only">60</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="progress-title">
                                        Javascript
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-skill2" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="progress-title">
                                        HTML coding
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-skill3" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                            <span class="sr-only">80</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="progress-title">
                                        SEO
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-skill4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">90</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="progress-title">
                                        SEM
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-skill5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 mt-big" data-animate="bounceIn">
                        <?php echo $this->Html->image('../home/img/logo.jpg',array('class' => 'img img-responsive')); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#about -->

        <!-- *** ABOUT END *** -->

        <!-- *** SERVICES ***
_________________________________________________________ -->
        <div class="section text-gradient" id="services" style="background: #13836C linear-gradient(to bottom, #094377 0%, #000000 100%) repeat-x scroll 0% 0%;">
            <div class="container">
                <div class="col-md-12">
                    <h2 class="title" data-animate="fadeInDown">Serviços</h2>

                    <div class="row services">

                        <div class="col-md-4" data-animate="fadeInUp">
                            <div class="icon"><i class="fa fa-exchange"></i>
                            </div>
                            <h3 class="heading">Requisições</h3>
                            <p>On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation
                                breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham.</p>
                        </div>

                        <div class="col-md-4" data-animate="fadeInUp">
                            <div class="icon"><i class="fa fa-file-pdf-o"></i>
                            </div>
                            <h3 class="heading">Datasheets</h3>
                            <p>Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh determine as.</p>
                        </div>

                        <div class="col-md-4" data-animate="fadeInUp">
                            <div class="icon"><i class="fa fa-bar-chart"></i>
                            </div>
                            <h3 class="heading">Relatórios</h3>
                            <p>Rooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh. Luckily cheered colonel me do we attacks on highest enabled. Tried law yet style child. Bore of true of no
                                be deal.</p>
                        </div>

                    </div>

                    <hr>

                  <!--  <div class="text-center">

                        <p class="lead">Would you like to know more or just discuss something?</p>

                        <p><a href="#contact" class="btn btn-default btn-lg scrollTo">Contact me</a>
                        </p>

                    </div>-->

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** SERVICES END *** -->

        <!-- *** TESTIMONIALS ***
_________________________________________________________ -->

        <!--<div class="section text-gray" id="testimonials" data-animate="fadeInUp">

            <div class="container">
                <div class="col-md-12">

                    <div class="mb20">
                        <h2 class="title" data-animate="fadeInUp">Login</h2>
                    </div>
                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your firstname *" required="required">
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="surname" class="form-control" placeholder="Your lastname *" required="required">
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary btn-lg" value="Send message">
                            </div>
                        </div>
                    </div>-->
                    <!-- /.owl-carousel -->
                <!--</div>-->
                <!-- /.12 -->
            <!--</div>-->
            <!-- /.container -->

        <!--</div>-->
        <!-- /.section -->

        <!-- *** TESTIMONIALS END *** -->

        <!-- *** SHOWCASE ***
_________________________________________________________ -->
        <div class="section text-parallax parallax-image1" id="services">
            <div class="container">
                <div class="row showcase">
                    <div class="col-md-3 col-sm-6" data-animate="fadeInUp">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i>
                            </div>
                            <h4><span class="counter">120</span><br>

			Websites</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-animate="fadeInUp">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter">50</span><br>

			Satisfied Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-animate="fadeInUp">
                        <div class="item">
                            <div class="icon"><i class="fa fa-copy"></i>
                            </div>
                            <h4><span class="counter">320</span><br>

			Projects</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-animate="fadeInUp">
                        <div class="item">
                            <div class="icon"><i class="fa fa-font"></i>
                            </div>
                            <h4><span class="counter">333</span><br>

			Magazines and Brochures</h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="dark-mask"></div>

        </div>
        <!-- /.section -->

        <!-- *** REFERENCES IMAGE ***
_________________________________________________________ -->
        <!--<div class="section" id="references">
            <div class="container">
                <div class="col-sm-12">

                    <div class="mb20">
                        <h2 class="title" data-animate="fadeInUp">My work</h2>

                        <p class="lead" data-animate="fadeInUp">I have worked on dozens of projects so I have picked only the latest for you.</p>
                    </div>

                    <ul id="filter" data-animate="fadeInUp">
                        <li class="active"><a href="#" data-filter="all">All</a>
                        </li>
                        <li><a href="#" data-filter="webdesign">Webdesign</a>
                        </li>
                        <li><a href="#" data-filter="seo">SEO</a>
                        </li>
                        <li><a href="#" data-filter="marketing">Marketing</a>
                        </li>
                        <li><a href="#" data-filter="other">Other</a>
                        </li>
                    </ul>

                    <div id="detail">

                        <span class="close">&times;</span>

                        <div id="detail-slider"></div>

                        <div class="text-center">
                            <h1 id="detail-title">&nbsp;</h1>
                        </div>

                        <div id="detail-content"></div>

                    </div>-->
                    <!-- Reference detail -->

                  <!--  <div id="references-masonry" data-animate="fadeInUp">

                        <div class="reference-item" data-category="webdesign">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-1.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="reference-item" data-category="seo">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-2.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="reference-item" data-category="marketing">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-3.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="reference-item" data-category="marketing">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-4.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="reference-item" data-category="webdesign">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-5.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="reference-item" data-category="other">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-6.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="reference-item" data-category="seo">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-7.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="reference-item" data-category="webdesign">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/portfolio-8.jpg" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Project name</h3>
                                        <p>Short project description goes here...</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>-->
                    <!-- /#references-masonry -->

              <!--  </div>-->
                <!-- /.12 -->
            <!--</div>-->
            <!-- /.container -->
        <!--</div>-->
        <!-- /.section -->

        <!-- *** REFERENCES END *** -->

        <!-- *** CUSTOMERS ***
_________________________________________________________ -->

        <!--<div class="section text-gray" id="customers">
            <div class="container">
                <div class="col-md-12">


                    <div class="row">
                        <div class="col-sm-4 col-md-2  col-xs-6">
                            <div class="customer">
                                <img class="img-responsive" src="img/customers/kofola.png" title="Kofola" data-placement="bottom" data-toggle="tooltip" alt="">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2  col-xs-6">
                            <div class="customer">
                                <img class="img-responsive" src="img/customers/evian.png" title="Evian" data-placement="bottom" data-toggle="tooltip" alt="">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2  col-xs-6">
                            <div class="customer">
                                <img class="img-responsive" src="img/customers/cslink.png" title="CS Link" data-placement="bottom" data-toggle="tooltip" alt="">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2  col-xs-6">
                            <div class="customer">
                                <img class="img-responsive" src="img/customers/botas66.png" title="Botas 66 Concept store" data-placement="bottom" data-toggle="tooltip" alt="">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2  col-xs-6">
                            <div class="customer">
                                <img class="img-responsive" src="img/customers/mdfc.png" title="MediaFabríca" data-placement="bottom" data-toggle="tooltip" alt="">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2  col-xs-6">
                            <div class="customer">
                                <img class="img-responsive" src="img/customers/vanek.png" title="VANĚK Strojírenská výroba" data-placement="bottom" data-toggle="tooltip" alt="">
                            </div>
                        </div>

                    </div>-->
                    <!-- /.row -->


                <!--</div>-->
                <!-- /.12 -->
            <!--</div>-->
            <!-- /.container -->
        <!--</div>-->
        <!-- /.section -->

        <!-- *** CUSTOMERS END *** -->

        <!-- *** CONTACT ***
_________________________________________________________ -->

<div class="section contact" id="login" data-animate="bounceIn">
    <div class="container">
        <div class="col-md-12">


            <h2 class="title">LOGIN</h2>
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
                          <?php echo $this->Form->create('User',array('action' => 'login'));?>
                            <div class="row">
                              <div>
                              </div>
                                <div class="col-md-12">
                                  <?php echo $this->Form->input('username',array('class' => 'form-control','placeholder'=> 'Usuário','label' => false)); ?>
                                </div>
                                <div class="col-md-12">
                                  <?php echo $this->Form->input('password',array('class' => 'form-control','placeholder'=> 'Senha','label' => false)); ?>
                                </div>
                                <div class="col-md-12 text-center">
                                  <?php
                                      $options = array('label' => 'Entrar', 'class' => 'btn btn-info btn-lg', 'div' => false);
                                      echo $this->Form->end($options);
                                  ?>
                                </div>
                                <div class="pull-right">
                                  <?php echo $this->Html->link(__('Esqueceu sua senha?'), array('controller' => 'users','action' => 'recovery'));?>
                                </div>
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
</body>

</html>

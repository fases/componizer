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
        <script>
            NProgress.start();
        </script>

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
              <!-- sidebar menu -->
            <?php echo $this->element('menu'); ?>
              <!-- /sidebar menu -->

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <!--<img src="images/img.jpg" alt="">--><i class="fa fa-user"></i>
                                  <?php echo $this->Session->read('Auth.User.nome'); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><?php echo $this->Html->link(__('Meus dados'), array('controller' => 'users','action' => 'profile')); ?>
                                        </li>
                                        <li><?php echo $this->Html->link(__('Alterar senha'), array('controller' => 'users','action' => 'password')); ?>
                                        </li>
                                        <li><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout'));?><!--<i class="fa fa-sign-out pull-right"></i>-->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->


                <!-- page content -->
                <div class="right_col" role="main">

                    <!-- top tiles -->
                    <div class="">

                        <div class="page-title">
                            <div class="title_left">
                                <h3>Requisições</h3>
                            </div>

                            <!--  <div class="title_right">
                                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                      <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Pesquisar">
                                          <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">OK!</button>
                              </span>
                                      </div>
                                  </div>
                              </div> -->
                        </div>
                    </div>
                    <br />

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Notificar Requisição <small></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                            <?php echo $this->Session->flash(); ?>
                                <div class="x_content">

                                    <!--<form class="form-horizontal form-label-left" novalidate> -->
                                <?php echo $this->Form->create('Emprestimo',array('action' => 'notify', 'class' => 'form-horizontal form-label-left', 'novalidate'));?>

                                    <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                    </p> -->
                                    <!--<span class="section">Personal Info</span>-->
                                    <?php
    echo $this->Form->input('horario',array('type' => 'hidden'));
    echo $this->Form->input('turno',array('type' => 'hidden'));
    echo $this->Form->input('data_aula',array('type' => 'hidden'));
    echo $this->Form->input('user_id',array('type' => 'hidden'));
    echo $this->Form->input('laboratorio_id',array('type' => 'hidden'));
    echo $this->Form->input('estado',array('type' => 'hidden'));
    echo $this->Form->input('data_emprestimo',array('type' => 'hidden')); ?>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matricula">Observações </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php echo $this->Form->textarea('observacoes',array('label' => 'Observações','rows' => '3', 'class' => 'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matricula">Status </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php echo $this->Form->input('notificar',array('options' => array(1 => 'Disponível',2 => 'Parcialmente Disponível',3 => 'Índisponível'),'label' => false,'class' => 'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                          <?php
                                              $options = array('label' => 'Notificar', 'class' => 'btn btn-success');
                                              echo $this->Form->end($options);
                                              echo $this->Html->link('Cancelar',array('controller' => 'emprestimos','action' => 'profile'),array('class' => 'btn btn-danger'));
                                          ?>
                                        </div>
                                    </div>
                                    <!--</form> -->

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- end of weather widget -->

                    <!-- footer content -->

                    <footer>
                        <div class="">
                            <p class="pull-right">Sistema de gerenciamento online para componentes eletrônicos. |
                                <span class="lead"> <i class="fa fa-paw"></i> Componizer!</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

<?php
        echo $this->Html->script('gauge/gauge.min.js');
        echo $this->Html->script('gauge/gauge_demo.js');
        echo $this->Html->script('chartjs/chart.min.js');
        echo $this->Html->script('progressbar/bootstrap-progressbar.min.js');
        echo $this->Html->script('nicescroll/jquery.nicescroll.min.js');
        echo $this->Html->script('icheck/icheck.min.js');
        echo $this->Html->script('moment.min.js');
        echo $this->Html->script('datepicker/daterangepicker.js');
        echo $this->Html->script('flot/curvedLines.js');
        echo $this->Html->script('flot/date.js');
        echo $this->Html->script('flot/jquery.flot.js');
        echo $this->Html->script('flot/jquery.flot.orderBars.js');
        echo $this->Html->script('flot/jquery.flot.pie.js');
        echo $this->Html->script('flot/jquery.flot.resize.js');
        echo $this->Html->script('flot/jquery.flot.spline.js');
        echo $this->Html->script('flot/jquery.flot.stack.js');
        echo $this->Html->script('flot/jquery.flot.time.min.js');
        echo $this->Html->script('flot/jquery.flot.tooltip.min.js');
    ?>
    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

    <!-- worldmap -->
      <?php
            echo $this->Html->script('maps/gdp-data.js');
            echo $this->Html->script('maps/jquery-jvectormap-2.0.1.min.js');
            echo $this->Html->script('maps/jquery-jvectormap-us-aea-en.js');
            echo $this->Html->script('maps/jquery-jvectormap-world-mill-en.js');
        ?>
    <script>
        $(function () {
            $('#world-map-gdp').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                zoomOnScroll: false,
                series: {
                    regions: [{
                            values: gdpData,
                            scale: ['#E6F2F0', '#149B7E'],
                            normalizeFunction: 'polynomial'
                        }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    <!-- skycons -->
    <script src="js/skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
            "color": "#73879C"
        }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

        for (i = list.length; i--; )
            icons.set(list[i], list[i]);

        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
        ];
        var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>

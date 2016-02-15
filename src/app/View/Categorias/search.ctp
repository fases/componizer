<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Componizer | </title>
        <script>
            NProgress.start();
        </script>

        <link href="css/custom.css" rel="stylesheet">

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

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                          <?php echo $this->Html->link($this->Html->image("componizer.png",
                          array("alt" => "Logo", 'class' => 'img_logo_img')),
                          array('controller' => 'users','action' => 'index'),
                          array('escape' => false)); ?>

                        </div>
                        <div class="clearfix"></div>

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <!--<h3>General</h3>-->
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-user"></i> Perfil <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><?php echo $this->Html->link(__('Meus dados'), array('controller' => 'users','action' => 'profile')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Alterar senha'), array('controller' => 'users','action' => 'password')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                <?php if($this->Session->read('Auth.User.role') > 0){ ?>
                                    <li><a><i class="fa fa-circle"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><?php echo $this->Html->link(__('Listar categorias'), array('controller' => 'categorias','action' => 'index')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Cadastrar categoria'), array('controller' => 'categorias','action' => 'add')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-circle-o"></i> Subcategorias <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><?php echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Cadastrar subcategoria'), array('controller' => 'subcategorias','action' => 'add')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-cubes"></i> Componentes <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <!-- Datasheets para o -->
                                            <li><?php echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Cadastrar componente'), array('controller' => 'componentes','action' => 'add')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } 
                                  if($this->Session->read('Auth.User.role') > 1){ 
                                ?>
                                    <li><a><i class="fa fa-users"></i> Gerenciar usuários <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><?php echo $this->Html->link(__('Listar usuários'), array('controller' => 'users','action' => 'index')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Cadastrar usuário'), array('controller' => 'users','action' => 'add')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                    <li><a><i class="fa fa-building-o"></i> Laboratórios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><?php echo $this->Html->link(__('Listar laboratórios'), array('controller' => 'laboratorios','action' => 'index')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Cadastrar laboratórios'), array('controller' => 'laboratorios','action' => 'add')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-archive"></i> Requisições <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                        <?php if($this->Session->read('Auth.User.role') > 0){ ?>
                                            <li><?php echo $this->Html->link(__('Listar requisições'), array('controller' => 'emprestimos','action' => 'index')); ?>
                                            </li>
                                        <?php } ?>
                                            <li><?php echo $this->Html->link(__('Criar requisição'), array('controller' => 'emprestimos','action' => 'add')); ?>
                                            </li>
                                            <li><?php echo $this->Html->link(__('Minhas requisições'), array('controller' => 'emprestimos','action' => 'profile')); ?>
                                        </ul>
                                    </li>
                                <?php if($this->Session->read('Auth.User.role' == 3)){ ?>
                                    <li><a><i class="fa fa-pie-chart"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="chartjs.html">Chart JS</a>
                                            </li>
                                            <li><a href="chartjs2.html">Chart JS2</a>
                                            </li>
                                            <li><a href="morisjs.html">Moris JS</a>
                                            </li>
                                            <li><a href="echarts.html">ECharts </a>
                                            </li>
                                            <li><a href="other_charts.html">Other Charts </a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                    <!--<li><a><i class="fa fa-power-off"></i> Logout </a>-->
                                    <!--  <ul class="nav child_menu" style="display: none">-->

                                    <!--<li><?php //echo $this->Html->link('<i class="fa fa-power-off"></i>',
                                //array('controller' => 'users','action' => 'logout',),
                                //array('escape' => false));?>
                                  </li>-->

                                    <!--</ul>-->
                                    <!--  </li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <?php echo $this->Html->link('<i class="fa fa-power-off"></i>',
                            array('controller' => 'users','action' => 'logout', 'title' => 'Logout'),
                            array('escape' => false));?>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

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
                                <h3>Categorias</h3>
                            </div>

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <?php echo $this->Form->create('Categoria', array('controller' => 'categorias', 'action' => 'search'));?>
                                    <div class="input-group">
                              <?php echo $this->Form->input('pedaco_nome',array('class' => 'form-control','placeholder'=> 'Pesquisar', 'label' => false)); ?>
                                        <span class="input-group-btn">
                                <?php
                                    $options = array('label' => 'OK', 'class' => 'btn btn-default');
                                    echo $this->Form->end($options);?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Lista de categorias <small></small></h2>
                                        <!--<ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      <?php //echo $this->Html->link('<i class="fa fa-power-off"></i>',
                                      //array('controller' => 'users','action' => 'logout',),
                                      //array('escape' => false));?>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>-->

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="x_content">

                              <!--  <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                            <thead>
                                                  <!--<tr class="headings">
                                                    <th>
                                                      <input type="checkbox" id="check-all" class="flat">
                                                    </th>-->
                                            <th class="column-title">Nome </th>
                                            <th class="column-title">Descrição </th>
                                            <th class="column-title no-link last"><span class="nobr">Ações</span>
                                            </th>
                                            <th class="bulk-actions" colspan="7">
                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                <?php foreach ($categorias as $valor): ?>
                                                <tr class="even pointer">
                                                    <td> <?php echo $this->Html->link($valor['Categoria']['nome'],array('action' => 'view', $valor['Categoria']['id'])) ?> </td>
                                                    <td> <?php echo $valor ['Categoria']['descricao']; ?> </td>
                                                    <td> 
                                                    <?php
                                                     echo $this->Html->link('Nova Subcategoria', array('controller' => 'subcategorias',
                                                        'action' => 'add', $valor['Categoria']['id']),
                                                        array('class' => 'btn btn-round btn-default'));
                                                    ?>
                                                    <?php
                                                      echo $this->Html->link('Editar', array('action' => 'edit', $valor['Categoria']['id']),
                                                          array('class' => 'btn btn-round btn-info'));
                                                    ?>
                                                    <?php
                                                      echo $this->Html->link('Deletar', array('action' => 'delete', $valor['Categoria']['id']),
                                                          array('class' => 'btn btn-round btn-danger'));
                                                    ?></td>
                                                </tr>
                                          <?php endforeach; ?>
                                              <!--<tr class="odd pointer"> -->
                                            </tbody>

                                        </table>
                                        <div class="pagination">
                                            <div class="list">
                                   <?php
                                       echo $this->Paginator->prev('« Anterior', null, null, array('class' => 'prev disabled'));
                                       echo $this->Paginator->numbers(array('separator' => false));
                                       echo $this->Paginator->next('Próximo »', null, null, array('class' => 'prev disabled'));
                                   ?>
                                            </div>
                                        </div>

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

    <!--<script src="js/bootstrap.min.js"></script>-->

        <!-- gauge js -->
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
    <?php echo $this->Html->script('skycons/skycons.js'); ?>
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

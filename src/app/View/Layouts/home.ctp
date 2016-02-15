<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Componizer |');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>
		<?php // $this->fetch('title'); ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');
		 echo $this->Html->meta('componizer_icone.ico','/componizer_icone.ico',array('type' => 'icon'));

		//echo $this->Html->css('cake.generic');
		//echo $this->Html->css('../home/css');
		echo $this->Html->css('../home/css/animate.css');
		echo $this->Html->css('../home/css/bootstrap.css');
		echo $this->Html->css('../home/css/bootstrap.css.map.css');
		echo $this->Html->css('../home/css/bootstrap.min.css');
		echo $this->Html->css('../home/css/custom.css');
		// echo $this->Html->css('../home/css/font-awesome.css');
		echo $this->Html->css('../home/css/jquery.fancybox.css');
		echo $this->Html->css('../home/css/owl.carousel.css');
		echo $this->Html->css('../home/css/owl.theme.css');
		echo $this->Html->css('../home/css/style.blue.css');
		echo $this->Html->css('../home/css/style.default.css');
		echo $this->Html->css('../home/css/style.green.css');
		echo $this->Html->css('../home/css/style.pink.css');
		echo $this->Html->css('../home/css/style.red.css');
		echo $this->Html->css('../home/css/style.violet.css');
		echo $this->Html->css('../fonts/css/font-awesome.min');;
		echo $this->Html->css('../fonts/css/font-awesome');
		//
		echo $this->Html->script('../home/js/bootstrap.min.js');
		echo $this->Html->script('../home/js/front.js');
		echo $this->Html->script('../home/js/gmaps.js');
		echo $this->Html->script('../home/js/jquery-1.11.0.min.js');
		echo $this->Html->script('../home/js/jquery.cookie.js');
		echo $this->Html->script('../home/js/jquery.counterup.min.js');
		echo $this->Html->script('../home/js/jquery.parallax-1.1.3.js');
		echo $this->Html->script('../home/js/jquery.scrollTo.min.js');
		echo $this->Html->script('../home/js/main.js');
		echo $this->Html->script('../home/js/masonry.pkgd.min.js');
		echo $this->Html->script('../home/js/modernizr-2.6.2.min.js');
		echo $this->Html->script('../home/js/owl.carousel.min.js');
		echo $this->Html->script('../home/js/respond.min.js');
		echo $this->Html->script('../home/js/waypoints.min.js');
		//

		/* pasta auto complete
		echo $this->Html->script('autocomplete/countries.js');
		echo $this->Html->script('autocomplete/jquery.autocomplete.js');
		// pasta calendar
		echo $this->Html->script('calendar/fullcalendar.min.js');
		// pasta js/chartjs
		echo $this->Html->script('chartjs/chart.min.js');
		// pasta colorpicker
		echo $this->Html->script('colorpicker/bootstrap-colorpicker.js');
		echo $this->Html->script('colorpicker/docs.js');
        // pasta cropping
		echo $this->Html->script('cropping/cropper.min.js');
        echo $this->Html->script('cropping/main.js');
        echo $this->Html->script('cropping/main2.js');
		// pasta js/datepicker
		echo $this->Html->script('datepicker/daterangepicker.js');
		// pasta js/flot
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
		//pasta js/guage
		echo $this->Html->script('gauge/gauge.min.js');
		echo $this->Html->script('gauge/gauge_demo.js');
		// pasta js/icheck
		echo $this->Html->script('icheck/icheck.min.js');
		// pasta js/maps
		echo $this->Html->script('maps/gdp-data.js');
		echo $this->Html->script('maps/jquery-jvectormap-2.0.1.min.js');
		echo $this->Html->script('maps/jquery-jvectormap-us-aea-en.js');
		echo $this->Html->script('maps/jquery-jvectormap-world-mill-en.js');
		// pasta js/nicescroll
		echo $this->Html->script('nicescroll/jquery.nicescroll.min.js');
		//pasta js/progressbar
		echo $this->Html->script('progressbar/bootstrap-progressbar.min.js');
		//pasta js/skycons
		echo $this->Html->script('skycons/skycons.js');
        // pasta sparkline
        echo $this->Html->script('sparkline/jquery.sparkline.min.js');
        // pasta switchery
        echo $this->Html->script('switchery/switchery.min.js');*/
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<!--<div id="header">
			<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div> -->
		<div id="content">

			<?php //echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php //echo $this->Html->link(
					//$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					//'http://www.cakephp.org/',
					//array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				//);
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
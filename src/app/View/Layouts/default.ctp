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
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('animate.min.css');
		echo $this->Html->css('custom.css');
		echo $this->Html->css('jquery-jvectormap-2.0.1.css');
		echo $this->Html->css('green.css');
		echo $this->Html->css('floatexamples.css');

		// //
		//echo $this->Html->script('Jquery');
		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('custom.js');
		echo $this->Html->script('moment.min.js');
		echo $this->Html->script('nprogress.js');
		// pasta js/chartjs
		echo $this->Html->script('chart.min.js');
		// pasta js/datepicker
		echo $this->Html->script('daterangepicker.js');
		// pasta js/flot
		echo $this->Html->script('curvedLines.js');
		echo $this->Html->script('date.js');
		echo $this->Html->script('jquery.flot.js');
		echo $this->Html->script('jquery.flot.orderBars.js');
		echo $this->Html->script('jquery.flot.pie.js');
		echo $this->Html->script('jquery.flot.resize.js');
		echo $this->Html->script('jquery.flot.spline.js');
		echo $this->Html->script('jquery.flot.stack.js');
		echo $this->Html->script('jquery.flot.time.min.js');
		//pasta js/guage
		echo $this->Html->script('guage.min.js');
		echo $this->Html->script('guage_demo.js');
		// pasta js/icheck
		echo $this->Html->script('icheck.min.js');
		// pasta js/maps
		echo $this->Html->script('gdp.data.js');
		echo $this->Html->script('jquery-jvectormap-2.0.1.min.js');
		echo $this->Html->script('jquery-jvectormap-us-aea-en.js');
		echo $this->Html->script('jquery-jvectormap-world-mill-en.js');
		// pasta js/nicescroll
		echo $this->Html->script('jquery.nicescroll.min.js');
		//pasta js/progressbar
		echo $this->Html->script('bootstrap-progressbar.min.js');
		//pasta js/skycons
		echo $this->Html->script('skycons.js');

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

			<?php echo $this->Session->flash(); ?>

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

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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
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
		echo $this->Html->css('ion.rangeSlider.css');
		echo $this->Html->css('ion.rangeSlider.skinFlat.css');
		echo $this->Html->css('normalize.css');
		echo $this->Html->css('nprogress.css');
		//pasta css/calendar
		echo $this->Html->css('fullcalendar.css');
		echo $this->Html->css('fullcalendar.min.css');
		echo $this->Html->css('fullcalendar.print.css');
		//pasta css/colorpicker
		echo $this->Html->css('bootstrap-colorpicker.min.css');
		//pasta css/datatables/css
		echo $this->Html->css('demo_page.css');
		echo $this->Html->css('demo_table.css');
		echo $this->Html->css('demo_table_jui.css');
		echo $this->Html->css('jquery.dataTables.css');
		echo $this->Html->css('jquery.dataTables_themeroller.css');
		// pasta css/datatables/tools/css
		echo $this->Html->css('dataTables.tableTools.css');
		//pasta css/editor
		echo $this->Html->css('index.css');
		//pasta css/editor/external/...
		echo $this->Html->css('prettify.css');
		//~pasta css/icheck/flat
		echo $this->Html->css('_all.css');
		echo $this->Html->css('aero.css');
		echo $this->Html->css('blue.css');
		echo $this->Html->css('flat.css');
		echo $this->Html->css('grey.css');
		echo $this->Html->css('orange.css');
		echo $this->Html->css('pink.css');
		echo $this->Html->css('purple.css');
		echo $this->Html->css('yellow.css');
		//pasta css/maps
		echo $this->Html->css('jquery-jvectormap-2.0.1.css');
		//pasta css/progressbar
		echo $this->Html->css('bootstrap-progressbar-3.3.0.css');
		//pasta css/select
		echo $this->Html->css('select2.min.css');
		//pasta css/switchery
		echo $this->Html->css('switchery.min.css');
		// //
		echo $this->Html->script('Jquery');
		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('custom.js');
		echo $this->Html->script('moment.min.js');
		echo $this->Html->script('moment.min2.js');
		echo $this->Html->script('nprogress.js');
		//pasta js/autocomplete
		echo $this->Html->script('countries.js');
		echo $this->Html->script('jquery.autocomplete.js');
		// pasta js/calendar
		echo $this->Html->script('fullcalendar.min.js');
		// pasta js/chartjs
		echo $this->Html->script('chart.min.js');
		// pasta js/colorpicker
		echo $this->Html->script('bootstrap-colorpicker.js');
		echo $this->Html->script('docs.js');
		// pasta js/cropping
		echo $this->Html->script('cropper.min.js');
		echo $this->Html->script('main.js');
		echo $this->Html->script('main2.js');
		// pasta js/datatables/jd
		echo $this->Html->script('jquery.dataTables.js');
		echo $this->Html->script('jquery.js');
		// pasta js/datatables/src
		echo $this->Html->script('DataTables.js');
		// pasta js/datatables/src/api
		echo $this->Html->script('api.internal.js');
		echo $this->Html->script('api.methods.js');
		echo $this->Html->script('api.static.js');
		// pasta js/datatables/src/core
		echo $this->Html->script('core.ajax.js');
		echo $this->Html->script('core.columns.js');
		echo $this->Html->script('core.compat.js');
		echo $this->Html->script('core.constructor.js');
		echo $this->Html->script('core.data.js');
		echo $this->Html->script('core.draw.js');
		echo $this->Html->script('core.filter.js');
		echo $this->Html->script('core.info.js');
		echo $this->Html->script('core.init.js');
		echo $this->Html->script('core.length.js');
		echo $this->Html->script('core.page.js');
		echo $this->Html->script('core.processing.js');
		echo $this->Html->script('core.scrolling.js');
		echo $this->Html->script('core.sizing.js');
		echo $this->Html->script('core.sort.js');
		echo $this->Html->script('core.state.js');
		echo $this->Html->script('core.support.js');
		// pasta js/datatables/src/ext
		echo $this->Html->script('ext.classes.js');
		echo $this->Html->script('ext.paging.js');
		echo $this->Html->script('ext.sorting.js');
		echo $this->Html->script('ext.types.js');
		// pasta js/datatables/src/model
		echo $this->Html->script('model.column.js');
		echo $this->Html->script('model.defaults.columns.js');
		echo $this->Html->script('model.defaults.js');
		echo $this->Html->script('model.ext.js');
		echo $this->Html->script('model.row.js');
		echo $this->Html->script('model.search.js');
		echo $this->Html->script('model.settings.js');
		// pasta js/datatables/tools/js
		echo $this->Html->script('dataTables.tableTools.js');
		// pasta js/datatables/tools/src
		echo $this->Html->script('TableTools.js');
		echo $this->Html->script('ZeroClipboard.js');
		//pasta datatables/unit_testing
		echo $this->Html->script('controller.js');
		echo $this->Html->script('unit_test.js');
		// pasta js/datepicker
		echo $this->Html->script('daterangepicker.js');
		// pasta js/dropzone
		echo $this->Html->script('dropzone.js');
		// pasta js/easypie
		echo $this->Html->script('jquery.easypiechart.min.js');
		// pasta js/echart
		echo $this->Html->script('echarts-all.js');
		echo $this->Html->script('green.js');
		// pasta js/editor
		echo $this->Html->script('bootstrap-wysiwyg.js');
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
		echo $this->Html->script('jquery.flot.tooltip.min.js');
		//pasta js/guage
		echo $this->Html->script('guage.min.js');
		echo $this->Html->script('guage_demo.js');
		// pasta js/icheck
		echo $this->Html->script('icheck.min.js');
		// pasta js/input_mask
		echo $this->Html->script('jquery.inputmask.js');
		// pasta js/ion_range
		echo $this->Html->script('ion.rangeSlider.min.js');
		// pasta js/knob
		echo $this->Html->script('jquery.knob.min.js');
		// pasta js/maps
		echo $this->Html->script('gdp.data.js');
		echo $this->Html->script('jquery-jvectormap-2.0.1.min.js');
		echo $this->Html->script('jquery-jvectormap-us-aea-en.js');
		echo $this->Html->script('jquery-jvectormap-world-mill-en.js');
		// pasta js/moris
		echo $this->Html->script('example.js');
		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('morris.js');
		echo $this->Html->script('morris.min.js');
		echo $this->Html->script('raphael-min.js');
		// pasta js/nicescroll
		echo $this->Html->script('jquery.nicescroll.min.js');
		// pasta js/notify
		echo $this->Html->script('pnotify.buttons.js');
		echo $this->Html->script('pnotify.core.js');
		echo $this->Html->script('pnotify.nonblock.js');
		// pasta js/parsley
		echo $this->Html->script('parsley.min.js');
		//pasta js/progressbar
		echo $this->Html->script('bootstrap-progressbar.min.js');
		//pasta js/select
		echo $this->Html->script('select2.full.js');
		//pasta js/sidebar
		echo $this->Html->script('classie.js');
		echo $this->Html->script('modernizr.custom.js');
		echo $this->Html->script('sidebarEffects.js');
		//pasta js/skycons
		echo $this->Html->script('skycons.js');
		//pasta js/sparkline
		echo $this->Html->script('jquery.sparkline.min.js');
		//pasta js/switchery
		echo $this->Html->script('switchery.min.js');
		// pasta js/tags
		echo $this->Html->script('jquery.tagsinput.min.js');
		//pasta js/textarea
		echo $this->Html->script('autosize.min.js');
		//pasta js/validator
		echo $this->Html->script('validator.js');
		//pasta js/wizard
		echo $this->Html->script('jquery.smartWizard.js');

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

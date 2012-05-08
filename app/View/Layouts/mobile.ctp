<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Heads Up');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="user-scalable=no, width=device-width" />
	
<!-- 	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" /> -->
	<?php echo $this->Html->css('headsup');?>
	<?php echo $this->Html->css('bootstrap');?>
	
 	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<!-- 	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script> -->
	<?php echo $this->Html->script('jquery-ui');?>
	<?php echo $this->Html->script('bootstrap');?>
	<?php echo $this->Html->script('bootstrap-transition');?>
	
	<?php echo $this->Html->meta('icon'); ?>
</head>
<body id="headsup">
	<div data-role="page" id="container">
		<div id="header" data-role="header" data-position="fixed" class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav pull-left">
						<li>
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th icon-white"></i>
							</a>
						</li>
						<li class="dropdown">
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-folder-open icon-white"></i>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
						     	<li class="nav-header">Intro to CS</li>
						     	<li><a href="#">Block 1</a></li>
						     	<li><a href="#">Block 2</a></li>
						     	<li class="nav-header">Java</li>
						     	<li><a href="#">Block 4</a></li>
							</ul>
						</li>
						<li>
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-envelope icon-white"></i>
							</a>
						</li>
					</ul>
					<form class="navbar-search pull-left">
						<input name="q" type="text" class="span2" placeholder="search students"/>
					</form>
					<ul class="pull-right nav">
						<li class="dropdown">
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-user icon-white"></i>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Settings</a></li>
						     	<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div data-role="content" id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<!-- <div data-role="footer" data-position="fixed" id="footer">
			<div data-role="navbar">
				<ul>
					<li><?php echo $this->Html->link(__('Dashboard'), '/dashboard', array('data-icon' => 'grid', 'data-iconpos' => 'top'));?></li>
					<li><?php echo $this->Html->link(__('Attendance'), '/attendance', array('data-icon' => 'grid', 'data-iconpos' => 'top'));?></li>
					<li><?php echo $this->Html->link(__('Courses'), '/dashboard', array('data-icon' => 'grid', 'data-iconpos' => 'top'));?></li>
					<li><?php echo $this->Html->link(__('Assignments'), '/dashboard', array('data-icon' => 'check', 'data-iconpos' => 'top'));?></li>
				</ul>
			</div>
		</div> -->
	</div>
	<?php echo $this->Js->writeBuffer(); // Write cached scripts?>
</body>
</html>
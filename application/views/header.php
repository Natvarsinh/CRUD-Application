<!DOCTYPE html>
<html>
<head>
	<title>CRUD APPLICATION</title>
	<link rel="shortcut icon" href="<?php echo base_url('images/crud.ico'); ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">CI CRUD APPLICATION</a>
			</div>
			<ul class="nav navbar-nav"> 
				<li class="active"><?php echo anchor('Crudapp/index','Home'); ?></li>
				<li><?php echo anchor('Crudapp/add_student','Add Student'); ?></li>
				<li><?php echo anchor('Crudapp/update_student','Update Student'); ?></li>
				<li><?php echo anchor('Crudapp/delete_student','Delete Student'); ?></li>
			</ul>
		</div>
	</nav>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".nav li").click(function(){
				$("ul li").addClass("active");
				$("ul li").removeClass("active");
			});
		});
	</script>
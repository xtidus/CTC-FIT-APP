<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTCFITApp - Welcome to CTC FIT App Control Panel</title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/pages/login.js"></script>
	<!-- /theme JS files -->
</head>
<body class="pace-done">
	
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>backend">Welcome to CTCFITApp Control Panel</a>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>
		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						Back to front-end site
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
	
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Advanced login -->
				<?php echo form_open_multipart('backend/dashboard', array('class' => 'form-horizontal')); ?>
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="border-warning-400 text-warning-400">(Logo will be here)</div>
							<h5 class="content-group-lg">
								<small class="display-block">Enter your credentials</small>
							</h5>
						</div>
						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>
						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>
						<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">
									<label class="checkbox-inline">
										<input type="checkbox" class="styled" checked="checked">
										Remember me
									</label>
								</div>

								<div class="col-sm-6 text-right">
									<a href="<?php echo base_url(); ?>backend/forgot_password">Forgot password?</a>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn bg-blue btn-block">
								Login <i class="icon-circle-right2 position-right"></i>
							</button>
						</div>
						<span class="help-block text-center no-margin">
							By continuing, you're confirming that you've read our 
							<b>Terms &amp; Conditions</b> and <b>Cookie Policy</b>
						</span>
					</div>
				<?php echo form_close(); ?>
				<!-- /advanced login -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

		<!-- Footer -->
		<div class="footer text-muted">
			Copyright &copy; 2015. <a href="#">CTC FIT App</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /page container -->

</body>
</html>
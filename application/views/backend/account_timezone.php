<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IoTStream - Update time zone</title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/back-end/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/app.js"></script>
	<!-- /theme JS files -->
</head>
<body class="sidebar-xs">

	<!-- Main navbar -->
	<?php require_once(APPPATH."views/master/main_navbar.php"); ?>
	<!-- /main navbar -->

	<!-- Second navbar -->
	<?php require_once(APPPATH."views/master/second_navbar.php"); ?>
	<!-- /second navbar -->

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<i class="icon-arrow-left52 position-left"></i>
					<span class="text-semibold">Time zone - Details</span>
				</h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="<?php echo base_url(); ?>backend/dashboard">Home</a></li>
					<li><a href="<?php echo base_url(); ?>backend/account/timezone">My account - timezone</a></li>
				</ul>
			</div>
			<?php require_once(APPPATH."views/master/heading_element.php"); ?>
		</div>
	</div>
	<!-- /page header -->

	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<!-- Secondary sidebar -->
			<div class="sidebar sidebar-secondary sidebar-default">
				<div class="sidebar-content">
					<!-- Sub navigation -->
					<div class="sidebar-category">
						<div class="category-content no-padding">
							<ul class="navigation navigation-alt navigation-accordion">
								<li class="navigation-header">Related Links</li>
								<li>
									<a href="<?php echo base_url(); ?>backend/account/timezone">
										<i class="icon-database-time2"></i> Time Zone
									</a>
								</li>
								<li>
									<a href="#"><i class="icon-user-plus"></i> My profile</a>
								</li>
								<li>
									<a href="#"><i class="icon-coins"></i> My balance</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sub navigation -->
				</div>
			</div>
			<!-- /secondary sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Grid -->
				<div class="row">
					<div class="col-md-12">

						<!-- Horizontal form -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Update your time zone</h5>
		                	</div>

							<div class="panel-body">
								<form class="form-horizontal" action="#">
									<div class="form-group">
			                        	<label class="control-label col-lg-2">Select your time zone</label>
			                        	<div class="col-lg-10">
				                            <select name="select" class="form-control">
				                                <option value="opt1">Country 1</option>
				                                <option value="opt1">Country 2</option>
				                                <option value="opt1">Country 3</option>
				                                <option value="opt1">Country 4</option>
				                                <option value="opt1">Country 5</option>
				                                <option value="opt1">Country 6</option>
				                                <option value="opt1">Country 7</option>
				                                <option value="opt1">Country 8</option>
				                                <option value="opt1">Country 9</option>
				                                <option value="opt1">Country 10</option>
				                            </select>
			                            </div>
			                        </div>
									<div class="form-group">
										<label class="control-label col-lg-2">&nbsp;</label>
										<div class="col-lg-10">
											<span style="color: green">
												<b>By default, the current system timezone will be New Zealand (UTC+12:00)</b>
											</span>
										</div>
									</div>
									<div class="text-right">
										<button type="submit" class="btn btn-primary">
											Update your timezone <i class="icon-arrow-right14 position-right"></i>
										</button>
									</div>
								</form>
							</div>
						</div>
						<!-- /horizotal form -->
					</div>
				</div>
				<!-- /grid -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

		<!-- Footer -->
		<?php require_once(APPPATH."views/master/footer.php"); ?>
		<!-- /footer -->

	</div>
	<!-- /page container -->

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTCFITApp - Main Dashboard</title>
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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->
</head>
<body>

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
					<span class="text-semibold">Dashboard</span> - Analytic
				</h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="#">Home</a></li>
					<li><a href="#">Dashboard</a></li>
				</ul>
			</div>
			<?php require_once(APPPATH."views/master/heading_element.php"); ?>
		</div>
	</div>
	<!-- /page header -->

	<!-- Page container -->
	<div class="page-container">
		<div class="page-content">
			<div class="content-wrapper">
				<div class="row">
					<div class="col-lg-8">
						
						<!-- /quick stats boxes -->
						<div class="row">
							<div class="col-lg-4">
								<div class="panel bg-blue-400">
									<div class="panel-body" style="text-align:center">
										<h3 class="no-margin">100</h3>
										<div style="font-size:16px">Total Product</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="panel bg-blue-400">
									<div class="panel-body" style="text-align:center">
										<h3 class="no-margin">100</h3>
										<div style="font-size:16px">Total Transaction</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="panel bg-blue-400">
									<div class="panel-body" style="text-align:center">
										<h3 class="no-margin">100</h3>
										<div style="font-size:16px">Total Customer</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /quick stats boxes -->
						
						<!-- Support tickets -->
						<div class="panel panel-flat">
							<div class="panel-heading" style="text-align:center">
								<h6 class="panel-title">Latest Support Tickets</h6>
							</div>
							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Subject</th>
											<th>Description</th>
											<th>Time</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width: 150px">
												<div class="media-left media-middle">
													<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">Support ticket 1</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">06:28 pm</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-left media-middle">
													<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">Support ticket 1</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">06:28 pm</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-left media-middle">
													<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">Support ticket 1</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">06:28 pm</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-left media-middle">
													<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">Support ticket 1</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">06:28 pm</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-left media-middle">
													<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">Support ticket 1</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">06:28 pm</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
									</tbody>
								</table>	
							</div>
						</div>
						<!-- /support tickets -->
						
						<!-- Latest customer joined -->
						<div class="panel panel-flat">
							<div class="panel-heading" style="text-align:center">
								<h6 class="panel-title">Latest Customer Joined</h6>
							</div>
							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Created</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width: 150px">
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">First name last name 1</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">From: fandyfandry@gmail.com</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">First name last name 2</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">From: fandyfandry@gmail.com</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">First name last name 3</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">From: fandyfandry@gmail.com</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">First name last name 4</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">From: fandyfandry@gmail.com</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
										<tr>
											<td style="width: 150px">
												<div class="media-body">
													<div class="media-heading">
														<a href="#" class="letter-icon-title">First name last name 5</a>
													</div>
													<div class="text-muted text-size-small">
														<i class="icon-checkmark3 text-size-mini position-left"></i> 
														<b>From: fandyfandry@gmail.com</b>
													</div>
												</div>
											</td>
											<td style="width: 300px">
												<span class="text-muted text-size-small">From: fandyfandry@gmail.com</span>
											</td>
											<td style="width: 100px">
												<span class="text-muted text-size-small">2015-January-10 06:28pm</span>
											</td>
										</tr>
									</tbody>
								</table>	
							</div>
						</div>
						<!-- End of latest customer joined -->
						
					</div>
					<div class="col-lg-4">

						<!-- Category -->
						<div class="panel panel-flat">
							<div class="panel-heading" style="text-align:center">
								<h6 class="panel-title">Category Details</h6>
							</div>
							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Category</th>
											<th>Count</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tours</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Flights</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Passes</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Hotels</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Cruises</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Transfers</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- End of category -->
						
						<!-- Tags -->
						<div class="panel panel-flat">
							<div class="panel-heading" style="text-align:center">
								<h6 class="panel-title">Popular Product Tags</h6>
							</div>
							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Tags</th>
											<th>Count</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tag 1</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tag 2</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tag 3</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tag 4</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tag 5</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="media-body">
													<div class="media-heading"><a href="#" class="letter-icon-title">Tag 6</a></div>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"><b>100</b></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- End of tags -->
						
					</div>
				</div>
				<!-- /dashboard content -->

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
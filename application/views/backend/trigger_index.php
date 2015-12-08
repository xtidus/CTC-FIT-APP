<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IoTStream - Trigger Management</title>
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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/pages/datatables_basic.js"></script>
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
					<span class="text-semibold">Triggers</span>
				</h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="<?php echo base_url(); ?>backend/dashboard">Home</a></li>
					<li><a href="<?php echo base_url(); ?>backend/trigger">Triggers</a></li>
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

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">You can trigger event on everything</h5>
						<div style="float:right">
							<button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#addNewTrigger">
								<b><i class="icon-add"></i></b> Add new trigger
							</button>
							<!-- Add new trigger modal -->
							<div id="addNewTrigger" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h5 class="modal-title">Add new trigger</h5>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" action="#">
												<fieldset class="content-group">
													<div class="form-group">
														<label class="control-label col-lg-3" data-popup="tooltip" title="Enter your device name" data-placement="bottom">
															Trigger name
														</label>
														<div class="col-lg-9">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3" data-popup="tooltip" title="Choose type storage engine" data-placement="bottom">
															Trigger on
														</label>
														<div class="col-lg-9">
															<select name="select" class="form-control">
								                                <option value="opt1">Device</option>
								                                <option value="opt1">Period</option>
								                                <option value="opt1">Usage</option>
								                            </select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3" data-popup="tooltip" title="Enter your device name" data-placement="bottom">
															&nbsp;
														</label>
														<div class="col-lg-9">
															<span>If device is selected:</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3" data-popup="tooltip" title="Enter your device name" data-placement="bottom">
															&nbsp;
														</label>
														<div class="col-lg-9">
															<span>If period is selected:</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3" data-popup="tooltip" title="Enter your device name" data-placement="bottom">
															&nbsp;
														</label>
														<div class="col-lg-9">
															<span>If usage is selected:</span>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Add new trigger</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End of add new trigger modal -->
						</div>
						<div style="float:right; margin-right:10px">
							<button type="button" class="btn btn-primary btn-labeled">
								<b><i class="icon-box-add"></i></b> Export data (.csv)
							</button>
						</div>
						<div style="clear:both"></div>
					</div>
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Trigger name</th>
								<th>Trigger on</th>
								<th>Event action</th>
								<th>Remove</th>
								<th>&nbsp;</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>My first trigger</td>
								<td>Usage</td>
								<td>Connection 01</td>
								<td>Reach 90 % of data</td>
								<td>Email danny@iotstream.io</td>
								<td class="text-center">
									<button type="button" class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Remove
									</button>
								</td>
							</tr>
							<tr>
								<td>My 2nd trigger</td>
								<td>Device</td>
								<td>Bike tracker 01</td>
								<td>Status is OFF</td>
								<td>Call API</td>
								<td class="text-center">
									<button type="button" class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Remove
									</button>
								</td>
							</tr>
							<tr>
								<td>My 3rd trigger</td>
								<td>Device</td>
								<td>Bike tracker 01</td>
								<td>Status is OFF</td>
								<td>Call API</td>
								<td class="text-center">
									<button type="button" class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Remove
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

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

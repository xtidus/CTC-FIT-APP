<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTCFITApp - Administrator Management</title>
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
					<span class="text-semibold">Administrator Management</span>
				</h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="<?php echo base_url(); ?>backend/dashboard">Home</a></li>
					<li><a href="<?php echo base_url(); ?>backend/administrator">Administrator Management</a></li>
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
						<h5 class="panel-title">This is summary of administrator list</h5>
						<div style="float:right">
							<button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#addAdministratorModal">
								<b><i class="icon-add"></i></b> Add new administrator
							</button>
							<!-- Add new administrator modal -->
							<div id="addAdministratorModal" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h5 class="modal-title">Add new administrator</h5>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" action="#">
												<fieldset class="content-group">
													<div class="form-group">
														<label class="control-label col-lg-3">
															* Name
														</label>
														<div class="col-lg-9">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3">
															* Email address
														</label>
														<div class="col-lg-9">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3">
															* Password
														</label>
														<div class="col-lg-9">
															<input type="password" class="form-control" />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3">
															* Retype password
														</label>
														<div class="col-lg-9">
															<input type="password" class="form-control" />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3">
															Contact no.
														</label>
														<div class="col-lg-9">
															<input type="contact_no" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-3">
															Address
														</label>
														<div class="col-lg-9">
															<textarea name="address" class="form-control" style="resize:none"></textarea>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Add new administrator</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End of add new administrator modal -->
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
								<th>Name</th>
								<th>Email address</th>
								<th>Contact no.</th>
								<th>Address</th>
								<th>Status</th>
								<th>Created</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Administrator 1</td>
								<td>admin1@gmail.com</td>
								<td>12345</td>
								<td>Singapore</td>
								<td><span class="label label-success">ACTIVATED</span></td>
								<td>03 December 2015 10:10:10</td>
								<td class="text-center">
									<a class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#addUpdateAdmin">
										<b><i class="icon-pencil3"></i></b> Update
									</a>
									<a class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Delete
									</a>
									<!-- Edit administrator modal -->
									<div id="addUpdateAdmin" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h5 class="modal-title">Edit administrator details</h5>
												</div>
												<div class="modal-body">
													<form class="form-horizontal" action="#">
														<fieldset class="content-group">
															<div class="form-group">
																<label class="control-label col-lg-3">
																	* Name
																</label>
																<div class="col-lg-9">
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	* Email address
																</label>
																<div class="col-lg-9">
																	<input type="text" class="form-control" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Contact no.
																</label>
																<div class="col-lg-9">
																	<input type="text" class="form-control" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Address
																</label>
																<div class="col-lg-9">
																	<textarea name="address" class="form-control" style="resize:none"></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Admin status
																</label>
																<div class="col-lg-9">
																	<select name="select" class="form-control">
										                                <option value="opt1">Active</option>
										                                <option value="opt1">Inactive</option>
										                            </select>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	New password
																</label>
																<div class="col-lg-9">
																	<input type="password" class="form-control" placeholder="Leave it blank if you do not wish to change" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Retype password
																</label>
																<div class="col-lg-9">
																	<input type="password" class="form-control" placeholder="Leave it blank if you do not wish to change" />
																</div>
															</div>
														</fieldset>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									<!-- End of edit administrator modal-->
								</td>
							</tr>
							<tr>
								<td>Administrator 1</td>
								<td>admin1@gmail.com</td>
								<td>12345</td>
								<td>Singapore</td>
								<td><span class="label label-success">ACTIVATED</span></td>
								<td>03 December 2015 10:10:10</td>
								<td class="text-center">
									<a class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#addUpdateAdmin">
										<b><i class="icon-pencil3"></i></b> Update
									</a>
									<a class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Delete
									</a>
									<!-- Edit administrator modal -->
									<div id="addUpdateAdmin" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h5 class="modal-title">Edit administrator details</h5>
												</div>
												<div class="modal-body">
													<form class="form-horizontal" action="#">
														<fieldset class="content-group">
															<div class="form-group">
																<label class="control-label col-lg-3">
																	* Name
																</label>
																<div class="col-lg-9">
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	* Email address
																</label>
																<div class="col-lg-9">
																	<input type="text" class="form-control" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Contact no.
																</label>
																<div class="col-lg-9">
																	<input type="text" class="form-control" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Address
																</label>
																<div class="col-lg-9">
																	<textarea name="address" class="form-control" style="resize:none"></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Admin status
																</label>
																<div class="col-lg-9">
																	<select name="select" class="form-control">
										                                <option value="opt1">Active</option>
										                                <option value="opt1">Inactive</option>
										                            </select>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	New password
																</label>
																<div class="col-lg-9">
																	<input type="password" class="form-control" placeholder="Leave it blank if you do not wish to change" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-lg-3">
																	Retype password
																</label>
																<div class="col-lg-9">
																	<input type="password" class="form-control" placeholder="Leave it blank if you do not wish to change" />
																</div>
															</div>
														</fieldset>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									<!-- End of edit administrator modal-->
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
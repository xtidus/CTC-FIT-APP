<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTCFITApp - Content Management</title>
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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/pages/editor_ckeditor.js"></script>
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
					<span class="text-semibold">Content Management</span>
				</h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="<?php echo base_url(); ?>backend/dashboard">Home</a></li>
					<li><a href="<?php echo base_url(); ?>backend/content">Content Management</a></li>
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
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Add new content</h5>
						<br />
						<div>
							<form class="form-horizontal" action="#">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Page title
										</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Page Slug URL
										</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Content
										</label>
										<div class="col-lg-9">
											<textarea name="editor-full" id="editor-full" rows="4" cols="4"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Content status
										</label>
										<div class="col-lg-9">
											<select name="select" class="form-control">
				                                <option value="1">Active</option>
				                                <option value="0">Inactive</option>
				                            </select>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Add new content</button>
						</div>
					</div>
					<div class="panel-heading" style="text-align:center">
						<h5 class="panel-title">Content List Summary</h5>
					</div>
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Page title</th>
								<th>URL</th>
								<th>Status</th>
								<th>Created</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Page title 1</td>
								<td>http://www.one.com/gmail</td>
								<td><span class="label label-success">ACTIVE</span></td>
								<td>2015-January-10 10:10:10</td>
								<td class="text-center">
									<button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#editCategory">
										<b><i class="icon-pencil3"></i></b> Update
									</button>
									<button type="button" class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Delete
									</button>
								</td>
							</tr>
							<tr>
								<td>Page title 1</td>
								<td>http://www.one.com/gmail</td>
								<td><span class="label label-success">ACTIVE</span></td>
								<td>2015-January-10 10:10:10</td>
								<td class="text-center">
									<button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#editCategory">
										<b><i class="icon-pencil3"></i></b> Update
									</button>
									<button type="button" class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Delete
									</button>
								</td>
							</tr>
							<tr>
								<td>Page title 1</td>
								<td>http://www.one.com/gmail</td>
								<td><span class="label label-success">ACTIVE</span></td>
								<td>2015-January-10 10:10:10</td>
								<td class="text-center">
									<button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#editCategory">
										<b><i class="icon-pencil3"></i></b> Update
									</button>
									<button type="button" class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Delete
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
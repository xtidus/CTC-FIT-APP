<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTCFITApp - Product Management</title>
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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/pages/editor_ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/back-end/assets/js/core/app.js"></script>
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
					<span class="text-semibold">Product Management</span>
				</h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="<?php echo base_url(); ?>backend/dashboard">Home</a></li>
					<li><a href="<?php echo base_url(); ?>backend/product">Product Management</a></li>
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
						<h5 class="panel-title">Add new product</h5>
						<br />
						<div>
							<form class="form-horizontal" action="#">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Choose product category
										</label>
										<div class="col-lg-4">
											<select name="select" class="form-control">
				                                <option value="1">Category A</option>
				                                <option value="1">Category B</option>
				                                <option value="1">Category C</option>
				                                <option value="1">Category D</option>
				                                <option value="1">Category E</option>
				                            </select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Product name
										</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Product content details
										</label>
										<div class="col-lg-9">
											<textarea name="editor-full" id="editor-full" rows="4" cols="4"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Product price
										</label>
										<div class="col-lg-3">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Product quantity
										</label>
										<div class="col-lg-3">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Start date
										</label>
										<div class="col-lg-3">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* End date
										</label>
										<div class="col-lg-3">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											* Product image(s)
										</label>
										<div class="col-lg-9">
											<input type="file" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											Product remark
										</label>
										<div class="col-lg-9">
											<textarea name="" class="form-control" style="resize:none"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">
											Product tag(s)
										</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" value="These, are, tokens" />
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Add new product</button>
						</div>
					</div>
					<div class="panel-heading">
						<h5 class="panel-title">This is summary of product list</h5>
						<div style="float:right; margin-right:10px; margin-top:-25px">
							<button type="button" class="btn btn-primary btn-labeled">
								<b><i class="icon-box-add"></i></b> Export data (.csv)
							</button>
						</div>
						<div style="clear:both"></div>
					</div>
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Category</th>
								<th>Name</th>
								<th style="width:50px; text-align:center">Price</th>
								<th style="width:50px; text-align:center">Qty</th>
								<th style="width:140px; text-align:center">Start date</th>
								<th style="width:140px; text-align:center">End date</th>
								<th style="width:50px; text-align:center">Status</th>
								<th style="width:140px; text-align:center">Created</th>
								<th style="width:250px" class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Category 1</td>
								<td>Name 1</td>
								<td>$1,500</td>
								<td>50</td>
								<td style="text-align:center">2015-12-05<br />10:10pm</td>
								<td style="text-align:center">2015-12-05<br />10:10pm</td>
								<td><span class="label label-success">ACTIVATED</span></td>
								<td style="text-align:center">03 December 2015<br />10:10:10</td>
								<td class="text-center">
									<a class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#addUpdateAdmin">
										<b><i class="icon-pencil3"></i></b> Update
									</a>
									<a class="btn btn-primary btn-labeled">
										<b><i class="icon-trash"></i></b> Delete
									</a>
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
<div class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?php echo base_url(); ?>backend/dashboard">(Logo icon here)</a>
		<ul class="nav navbar-nav pull-right visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
		</ul>
	</div>
	<div class="navbar-collapse collapse" id="navbar-mobile">
		<p class="navbar-text"><span class="label bg-success-400">Status: ONLINE</span></p>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<span>Online Help</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li>
						<a href="<?php echo base_url(); ?>backend/wiki">
							<i class="icon-help"></i>Wiki
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>backend/faq">
							<i class="icon-info3"></i>FAQ
						</a>
					</li>
					<li>
						<a href="mailto:immanuel@pixely.sg">
							<i class="icon-alert"></i>Email Support
						</a>
					</li>
				</ul>
			</li>
			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<span>Welcome, CTC Admin</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li>
						<a href="<?php echo base_url(); ?>backend/account">
							<i class="icon-user-plus"></i> My profile
						</a>
					</li>
					<li class="divider"></li>
					<li><a href="<?php echo base_url(); ?>backend/"><i class="icon-switch2"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
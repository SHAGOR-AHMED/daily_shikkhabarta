<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">
	<link rel="shortcut icon" href="<?= base_url('images/favicon.ico');?>">

	<!-- The styles -->
	<link  href="<?php echo base_url()?>assets/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url()?>assets/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url()?>assets/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/css/uploadify.css' rel='stylesheet'>
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"> <span>Daily Shikkhabarta</span></a>
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i>
						<span class="hidden-phone">
							<?php echo $this->session->userdata('admin_full_name'); ?>
						</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php 
							$AdminID = $this->session->userdata('admin_id');
						?>
						<li><a href="<?= base_url('Admin/ChangePassword/'.$AdminID);?>">Change Password</a></li>
						<li class="divider"></li>
                        <li><a href="<?= base_url('Admin/logout'); ?>">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url('Super_admin');?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url('Slider/');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Manage Slide</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url('Super_admin/add_category');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Category</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url('Super_admin/manage_category'); ?>"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Category</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url('Super_admin/add_blog');?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Blog</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url('Super_admin/manage_blog');?>"><i class="icon-font"></i><span class="hidden-tablet"> Manage Blog</span></a></li>
						<!-- <li><a class="ajax-link" href="<?php echo base_url('Super_admin/manage_comments');?>"><i class="icon-picture"></i><span class="hidden-tablet"> Manage Comments</span></a></li> -->
					
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
                <?php echo $admin_maincontent?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">Ã—</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="https://branded.me/shagor" target="_blank">Mr Perfect</a>&nbsp;<?= date('Y'); ?></p>
			<p class="pull-right">Powered by: <a href="http://markedian.com">Markedian IT</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url()?>assets/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url()?>assets/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url()?>assets/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url()?>assets/js/excanvas.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url()?>assets/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url()?>assets/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url()?>assets/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url()?>assets/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url()?>assets/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url()?>assets/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url()?>assets/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url()?>assets/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url()?>assets/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url()?>assets/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url()?>assets/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url()?>assets/js/charisma.js"></script>
	
		
</body>
</html>


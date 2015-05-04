<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page | The Agent.</title>
	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/common/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/backoffice/css/nifty.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/backoffice/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/backoffice/css/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/backoffice/js/pace.min.js"></script>
	<style>
		.my-bg{
			background-image : url("<?php echo base_url(); ?>assets/backoffice/img/bg_theagent.jpg");
		}
	</style>

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img my-bg"></div>
		
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="/">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title">The Agent <span class="text-thin">Authentification</span></span>
				</a>
			</div>
		</div>
		<!--===================================================-->
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm">Sign In to your account</p>
					<form action="/">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
								<input type="checkbox"> Remember me
								</label>
							</div>
							<div class="col-xs-4">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Sign In</button>
								</div>
							</div>
						</div>
						<div class="mar-btm"><em>- or -</em></div>
						<button class="btn btn-primary btn-lg btn-block" type="button">
							<i class="fa fa-facebook fa-fw"></i> Login with Facebook
						</button>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="#" class="btn-link mar-rgt">Forgot password ?</a>
				<a href="#" class="btn-link mar-lft">Create a new account</a>
			</div>
		</div>
		<!--===================================================-->
		
		
		
	</div>


	<script src="<?php echo base_url(); ?>assets/backoffice/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/common/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/backoffice/js/fastclick.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/backoffice/js/nifty.min.js"></script>

		

</body>
</html>

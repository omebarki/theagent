<?php get_instance()->load->helper(array('html','form')) ?>
<?= doctype('html5') ?>
<html lang="<?= lang("lg") ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= lang("page_title") ?> | <?= lang("the_agent") ?>.</title>

	<?= $this->load->view('frontoffice/initCSS_tpl') ?>
	<link href="<?= base_url() ?>assets/frontoffice/css/login.css" rel="stylesheet">

</head>
<body class="full">

<!-- Page Content -->
<div class="container loginContainer">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12">
			<div class="col-md-8 col-sm-6 col-xs-12 forceTablet">
				<div class="row">
					<h1 class="col-lg-8 col-sm-10 col-xs-8 forceStatic"><img src="<?= base_url() ?>/assets/frontoffice/img/the-agent-logo.png" width="256" height="56" alt="The Agent" class="img-responsive"></h1>
					<?= form_open('/aauth/Aauth/login', ['class' => 'col-lg-8 col-sm-10 col-xs-8 homeLogin forceStatic', 'role' => 'form', 'id' => 'login']) ?>
						<p><?= lang("member_access") ?></p>
						<div class="form_error"></div>
						<div class="login_error"></div>
						<div class="msg_success"></div>
						<div class="form-group">
							<?= form_input(['class' => 'form-control', 'name' => 'email', 'placeholder' => lang("email"), 'id' => 'email']) ?>
						</div>
						<div class="form-group">
							<?= form_password(['class' => 'form-control', 'name' => 'password', 'placeholder' => lang("password"), 'id' => 'password']) ?>
						</div>
						<button type="submit" class="btn btn-sm btn-primary"><?= lang("OK") ?></button>
						<p><a href="/aauth/Aauth/forgot" class="forgotPass" id="forgot"><?= lang("forgot_password") ?></a></p>
					<?= form_close() ?>
				</div>
				<?= form_open('/aauth/Aauth/forgot', ['class' => '', 'role' => 'form', 'id' => 'forgotForm']) ?>
				<?= form_close() ?>
			</div>
			<div class="col-xs-12 homeMainBlock forceTablet">
				<img src="<?= base_url() ?>/assets/frontoffice/img/homapage-bigtext.png" width="1000" height="323" alt="Join us" class="img-responsive">
				<div class="row userTypeRegisterBlock">
					<p class="col-xs-6 tac"><a class="btn btn-md btn-primary"><?= lang("sign_in_account_brand") ?></a></p>
					<p class="col-xs-6 tac"><a class="btn btn-md btn-primary"><?= lang("sign_in_account_retailer") ?></a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->

<footer class="footer">
	<!-- Navigation -->
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"><?= lang("toggle_navigation") ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand menuText"><?= lang("the_agent_menu") ?></span>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="#"><?= lang("brands") ?></a>
					</li>
					<li>
						<a href="#"><?= lang("retailers") ?></a>
					</li>
					<li>
						<a href="#"><?= lang("stepone") ?></a>
					</li>
					<li>
						<a href="#"><?= lang("team") ?></a>
					</li>
					<li>
						<a href="#"><?= lang("contact") ?></a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
</footer>


<?= $this->load->view('frontoffice/initJS_tpl') ?>
<script src="<?= base_url() ?>assets/frontoffice/js/login.js" type="text/javascript"></script>

</body>
</html>

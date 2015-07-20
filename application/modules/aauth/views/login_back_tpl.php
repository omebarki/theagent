<?php get_instance()->load->helper(array('html','form')) ?>
<?= doctype('html5') ?>
<html lang="<?= lang("lg") ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= lang("page_title") ?> | <?= lang("the_agent") ?>.</title>

	<?= $this->load->view('backoffice/initCSS_tpl') ?>

</head>
<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title"><?= lang("the_agent") ?> <span class="text-thin"><?= lang("admin") ?></span></span>
				</a>
			</div>
		</div>
		<!--===================================================-->
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm"><?= lang("sign_in_back") ?></p>
					<?= form_open('/aauth/Bauth/login', ['role' => 'form', 'id' => 'login']) ?>
						<div class="form_error"></div>
						<div class="login_error"></div>
						<div class="msg_success"></div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<?= form_input(['class' => 'form-control', 'name' => 'email', 'placeholder' => lang("email"), 'id' => 'email']) ?>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<?= form_password(['class' => 'form-control', 'name' => 'password', 'placeholder' => lang("password"), 'id' => 'password']) ?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
								<input name="remember" type="checkbox"> <?= lang("remember_me") ?>
								</label>
							</div>
							<div class="col-xs-4">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit"><?= lang("sign_in") ?></button>
								</div>
							</div>
						</div>
					<?= form_close() ?>
				</div>
				<?= form_open('/aauth/Bauth/forgot', ['class' => '', 'role' => 'form', 'id' => 'forgotForm']) ?>
				<?= form_close() ?>
			</div>
			<div class="pad-ver">
				<a href="/aauth/Bauth/forgot" class="btn-link mar-rgt" id="forgot"><?= lang("forgot_password") ?></a>
			</div>
		</div>
		<!--===================================================-->
	</div>
	<?= $this->load->view('backoffice/initJS_tpl') ?>
	<script src="<?= base_url() ?>assets/frontoffice/js/login.js" type="text/javascript"></script>
</body>
</html>

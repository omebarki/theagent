<?php get_instance()->load->helper(array('html')) ?>
<?= doctype('html5') ?>
<html lang="<?= lang('lg') ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>The Agent - <?= $title ?></title>

<?= $this->load->view('frontoffice/initCSS_tpl') ?>
<link href="<?= base_url() ?>assets/frontoffice/css/layout.css" rel="stylesheet">
<?php if(isset($assets) && isset($assets['css'])): ?>
<?php foreach($assets['css'] as $css) : ?>
<link href="<?= base_url() ?>assets/frontoffice/css/<?= $css ?>.css" rel="stylesheet">
<?php endforeach; ?>
<?php endif; ?>
</head>
<body>
<!-- Page Content -->
<?php if(isset($is_full_page)): ?>
<?= $this->load->view('frontoffice/full_page_tpl') ?>
<?php endif; ?>
<nav class="navbar navbar-inverse navbar-fixed-top fullwidth-bar">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand"><img src="<?= base_url() ?>assets/frontoffice/img/the-agent-logo-white.png" width="256" height="56" alt="<?= lang('the_agent') ?>"></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			  <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">
				<span class="userIcon"></span><span class="userName"> <?= $firstname ?></span> <span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu">
				<li><i class="upArrow"></i></li>
				<li><a href="#"><?= lang('account') ?></a></li>
				<li class="divider" role="separator"></li>
				<li><a href="/aauth/Aauth/logout"><?= lang('logout') ?></a></li>
			  </ul>
			</li>
			<li><a href="#" class="myMessages"><span class="envelope"></span></a></li>
			<li><a href="#" class="btn btn-primary" id="loveBrandsButton"><span class="heartIcon heartIconTop"></span><span class="hidden-xs hidden-sm"> <?= lang('love_brands') ?></span></a></li>
		</ul>
	</div><!--/.container-fluid -->

<div id="loveBrandList">
	<i class="upArrow"></i>
	<div class="lovedBrands owl-carousel">
		<?php foreach($wishList as $wish): ?>
			<?= $this->load->view('frontoffice/ctlg_tpl',array('catalog'=>$wish)) ?>
		<?php endforeach; ?>
	</div>
</div>

</nav>

<?= $content ?>
<!-- footer begin -->
<footer class="footer col-md-8 col-md-push-2">
	<div class="container">
		<ul class="footerLinks">
			<li><a href="#"><?= lang("home") ?></a></li>
			<li><a href="#"><?= lang("a_propos") ?></a></li>
			<li><a href="#"><?= lang("contact") ?></a></li>
		</ul>
	</div>
</footer>
<!-- footer end -->
<?= $this->load->view('frontoffice/initJS_tpl') ?>
<?php if(isset($assets) && isset($assets['js'])): ?>
<?php foreach($assets['js'] as $js) : ?>
<script src="<?= base_url() ?>assets/frontoffice/js/<?= $js ?>.js" type="text/javascript"></script>
<?php endforeach; ?>
<?php endif; ?>
</body>
</html>
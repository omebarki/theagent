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
<?= $this->load->view('frontoffice/full_page_tpl',array('filters'=>$filters)) ?>
<?php endif; ?>
<nav class="navbar navbar-inverse navbar-fixed-top fullwidth-bar">
	<div class="container">
		<div class="navbar-header">
			<a href="/frontoffice/catalog" class="navbar-brand"><img src="<?= base_url() ?>assets/frontoffice/img/the-agent-logo-white.png" width="179" height="40" alt="<?= lang('the_agent') ?>"></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown selections">
				<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" href="#">
					<span class="bellIcon"></span><span class="userName"> Selection</span> <span class="caret"></span>
				</a>
				<ul class="dropdown-menu wide">
					<li><i class="upArrow"></i></li>
					<li>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#selectionsTab" aria-controls="selectionsTab" role="tab" data-toggle="tab">Selections</a></li>
							<li role="presentation"><a href="#notificationsTab" aria-controls="notificationsTab" role="tab" data-toggle="tab">Notifications</a></li>
						</ul>
					</li>
					<li class="divider" role="separator"></li>
					<li>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="selectionsTab">
								<ul>
									<li class="product clearfix">
										<span class="prodBrand">Angels never die</span>
										<div class="prodImage"><img src="<?= base_url() ?>assets/frontoffice/img/temp/small_1.jpg" width="47" height="80" alt="Angels never die"></div>
										<div class="prodInfos">
											<span>Tunique JUSTICE Grey</span>
											<span class="price">32,00 €</span>
											<span class="price">30 Pieces</span>
											<span>One size</span>
										</div>
										<a class="delete"><i class="fa fa-trash-o"></i></a>
									</li>
									<li class="divider" role="separator"></li>
									<li class="product clearfix">
										<span class="prodBrand">Angels never die</span>
										<div class="prodImage"><img src="<?= base_url() ?>assets/frontoffice/img/temp/small_1.jpg" width="47" height="80" alt="Angels never die"></div>
										<div class="prodInfos">
											<span>Tunique JUSTICE Grey</span>
											<span class="price">32,00 €</span>
											<span class="price">30 Pieces</span>
											<span>One size</span>
										</div>
										<a class="delete"><i class="fa fa-trash-o"></i></a>
									</li>
									<li class="divider" role="separator"></li>
									<li class="buttonHolder tac"><a href="#" class="btn btn-md btn-primary seeAll">See all the selection</a></li>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="notificationsTab">
								<ul>
									<li class="notification clearfix">
										<img src="<?= base_url() ?>assets/frontoffice/img/temp/ico-ta.jpg" width="45" height="45" alt="The Agent">
										<div>
											You have received a price offer on the sales ANGELS NEVER DIE<br>
											<span><i class="fa fa-random"></i> 1 day(s) ago</span>
										</div>
									</li>
									<li class="divider" role="separator"></li>
									<li class="notification clearfix">
										<img src="<?= base_url() ?>assets/frontoffice/img/temp/ico-ta.jpg" width="45" height="45" alt="The Agent">
										<div>
											You have received a price offer on the sales SWAMEE<br>
											<span><i class="fa fa-random"></i> 2 day(s) ago</span>
										</div>
									</li>
									<li class="divider" role="separator"></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</li>
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
			<li><a class="btn btn-primary" id="loveBrandsButton"><span class="heartIcon heartIconTop"></span><span class="hidden-xs hidden-sm"> <?= lang('love_brands') ?></span></a></li>
		</ul>
	</div><!--/.container-fluid -->

</nav>

<div id="loveBrandList">
	<i class="upArrow"></i>
	<div class="lovedBrands owl-carousel">
		<?php foreach($wishList as $wish): ?>
			<?= $this->load->view('frontoffice/ctlg_tpl',array('catalog'=>$wish)) ?>
		<?php endforeach; ?>
	</div>
</div>

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
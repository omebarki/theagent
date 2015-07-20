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
<link href="<?= base_url() ?>assets/frontoffice/css/<?= $page_style ?>.css" rel="stylesheet">
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
	<div class="lovedBrands">
		<?php foreach($wishList as $whish): ?>
		<div class="brandColumn">
			<a href="/frontoffice/catalog/show/<?= $wish->id ?>">
				<img src=" http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $wish->idSaleFruitrouge ?>/currentSaleV4.jpg" width="450" height="340" class="img-responsive">
				<img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $wish->idSaleFruitrouge ?>/baselineFR-fr.jpg" width="450" height="340" class="img-responsive">
			</a>
			<a class="addToFavorites active" data-sale="sale_4001" title="<?= lang('mark_as_favorite_brand') ?>"></a>
			<div class="brandInfo clearfix">
				<div class="fr cr tar"><?= lang("available_until") ?> : <span><?= nice_date($wish->dateEnd, 'm/d/Y') ?></span></div>
				<div class=""><?= lang("brand") ?> : <span><?= $wish->brandName ?></span></div>
				<div class=""><?= lang("sku") ?> : <span><?= $wish->nbSku ?></span></div>
				<div class="fr cr tar"><?= lang("ws_price_range") ?> : <span><?= $wish->minPrice ?>€ / <?= $wish->maxPrice ?>€</span></div>
				<div class=""><?= lang("stock") ?> : <span><?= $wish->totalStock ?></span></div>
			</div>
		</div>
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
</body>
</html>
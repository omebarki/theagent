<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>The Agent - <? echo $title ?></title>

<!-- Bootstrap -->
<link href="<?php echo base_url() ?>assets/common/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/common/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/common/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/common/js/bootstrap-select.min.js"></script>

<!-- The agent resets and styles -->
<link href="<?php echo base_url() ?>assets/frontoffice/css/reset.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/bootstrap-select.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/theagent-defaults.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/global.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/<?php echo $page_style ?>.css" rel="stylesheet">
</head>
<body>
<!-- header begin -->
<nav class="navbar navbar-inverse navbar-fixed-top fullwidth-bar">
	<div class="container">
		<div class="navbar-header">
			<button aria-controls="navbar" aria-expanded="false" data-target="#navbarTop" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand"><img src="<?php echo base_url() ?>assets/frontoffice/img/the-agent-logo-small.jpg" width="91" height="58" /></a>
		</div>
		<div class="navbar-collapse collapse" id="navbarTop">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Connect</a></li>
				<li><a href="#">My account</a></li>
				<li><a href="/aauth/Aauth/logout">logout</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>
<div class="container">
	<div class="siteLogo tac"><img src="<?php echo base_url() ?>assets/frontoffice/img/the-agent-logo.jpg" width="316" height="84" alt="The agent" /></div>
</div>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarMain">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand menuText">The agent menu</span>
		</div>
		<div class="navbar-collapse collapse" id="navbarMain">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#"><?php echo lang("home"); ?></a></li>
				<li><a href="#"><?php echo lang("category"); ?></a></li>
				<li><a href="#"><?php echo lang("sku"); ?></a></li>
				<li><a href="#"><?php echo lang("stock"); ?></a></li>
				<li><a href="#"><?php echo lang("price"); ?></a></li>
				<li><a href="#"><?php echo lang("brands"); ?></a></li>
				<li><a href="#"><?php echo lang("size"); ?></a></li>
			</ul>
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input placeholder="Looking for ..." class="form-control form-control-xs" type="text">
				</div>
				<button type="submit" class="btn btn-xs btn-primary">OK</button>
			</form>
		</div><!--/.nav-collapse -->
	</nav>
</div>
<!-- header end -->
<!-- breadcrumbs -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Brands</a></li>
		<li>Abaco</li>
	</ol>
</div>
<!-- breadcrumbs end -->

<?php echo $content ?>

<!-- footer begin -->
<footer class="footer fullwidth-bar">
	<div class="container">
		<p class="text-muted">Place sticky footer content here.</p>
	</div>
</footer>
<!-- footer end -->

<script type="text/javascript">
  window.onload = function () {
	  $('.selectpicker').selectpicker();
  };
</script>

</body>
</html>
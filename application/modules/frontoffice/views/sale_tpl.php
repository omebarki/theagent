<!-- header begin -->
<div class="fullwidth-bar">
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button aria-controls="navbar" aria-expanded="false" data-target="#navbarTop" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><img src="<?php echo base_url() ?>assets/frontoffice/img/the-agent-logo-small.jpg" width="91" height="58" /></a>
				</div>
				<div class="navbar-collapse collapse" id="navbarTop">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Connect</a></li>
						<li><a href="#">My account</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
	</div>
</div>
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
		</div>
		<div class="navbar-collapse collapse" id="navbarMain">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">SKU</a></li>
				<li><a href="#">Stock</a></li>
				<li><a href="#">Price</a></li>
				<li><a href="#">Brands</a></li>
				<li><a href="#">Size</a></li>
			</ul>
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input placeholder="Looking for ..." class="form-control form-control-xs" type="text">
				</div>
				<button type="submit" class="btn btn-xs btn-primary">OK</button>
			</form>
		</div><!--/.nav-collapse -->
	</nav>
	<div class="filterbyForm clearfix">
		<form class="navbar-form navbar-right">
			<div class="form-group">
				<label class="control-label">Filter</label>
				<select class="selectpicker" data-width="auto" data-style="agentSelect">
					<option>Looking for ...</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Tri</label>
				<select class="selectpicker" data-width="auto" data-style="agentSelect">
					<option>All</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</form>
	</div>
</div>
<!-- header end -->

<!-- content homepage -->
<div class="container mainContainer homeContainer" role="main">
	<div class="row">
		<div class="col-md-6">
			<div class="brandBanner"><a href="<?php echo base_url() ?>frontoffice/category"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/homebanner-1.gif" width="571" height="437" class="img-responsive"></a></div>
			<div class="brandInfo clearfix">
				<div class="col-md-6">Brand: <span>ABACO Paris</span></div>
				<div class="col-md-6 tar">Available until: <span>05/12/15</span></div>
				<div class="col-md-12">SKU: <span>100</span></div>
				<div class="col-md-4">Stock: <span>800</span></div>
				<div class="col-md-8 tar">Wholesale Price range: <span>20€ / 90€</span></div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="brandBanner"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/homebanner-2.gif" width="571" height="437" class="img-responsive"></div>
			<div class="brandInfo clearfix">
				<div class="col-md-6">Brand: <span>STEPHANE VERDINO</span></div>
				<div class="col-md-6 tar">Available until: <span>05/12/15</span></div>
				<div class="col-md-12">SKU: <span>100</span></div>
				<div class="col-md-4">Stock: <span>800</span></div>
				<div class="col-md-8 tar">Wholesale Price range: <span>120€ / 190€</span></div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-2 col-md-push-5">
			<div class="progress agentProgress">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped active"><span class="sr-only">60% Complete</span></div>
			</div>
		</div>
		<div class="loadingBarLabel text-center">chargement en cours ...</div>
	</div>
	
</div>
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

<!-- content homepage -->
<div class="container mainContainer" role="main">
	<div role="alert" class="alert alert-agent">
    	Sales: <strong>ABACO</strong> <span>|</span> number of prooduct: 200 <span>|</span> number of SKU: 800 <span>|</span> Stock: 1.000
    </div>
	<div class="row">
		<div class="col-md-3 text-center brandInfoCol">
			<img src="<?php echo base_url() ?>assets/frontoffice/img/temp/abaco-logo.jpg" width="240" height="123" alt="Abaco"><br />
			<a class="btn btn-lg btn-primary">Add to wishlist</a>
			<a class="btn btn-lg btn-default btn-default-black">Plan the sales</a>
			<a class="btn btn-lg btn-default btn-default-black">See the stock</a>
			<a class="btn btn-lg btn-default btn-default-black">Marketing material</a>
			<a class="btn btn-lg btn-default btn-default-black">Upload the pack</a>
		</div>
		<div class="col-md-9"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/bigbanner-1.jpg" width="893" height="388" class="img-responsive"></div>
	</div>
	<div class="row">
		<div class="col-md-3 text-center">
			<h3>Sales contact</h3>
			<p><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/business-man.jpg" width="150" height="150" alt="Business Man"></p>
			<p>
			<strong>Bertrand Thoral</strong></br>
			Phone: +33 1 45 677 897</br>
			Mail: bertrand@theagent.com
			</p>
		</div>
		<div class="col-md-9">
			<div class="col-md-6">
				<h3>ABOUT THE BRAND</h3>
				<p id="viewdetails_1" class="viewdetails collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><a data-target="#viewdetails_1" data-toggle="collapse" class="btn btn_viewdetails">View details »</a></p>
			</div>
			<div class="col-md-6">
				<h3>LOGISTIC INFORMATION</h3>
				<p id="viewdetails_2" class="viewdetails collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><a data-target="#viewdetails_2" data-toggle="collapse" class="btn btn_viewdetails">View details »</a></p>
			</div>
		</div>
	</div>
	<div class="voffset4"></div>
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
	
	<div class="row productRow">
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/prod1.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset1"></div>
					Wholesale price:  <strong>12,50 €</strong><br/>
					Retail price:  <strong>36,00 €</strong> <br/>
					Stock: <strong>50 pieces</strong><br/>
					Size range: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_1" />
				<label for="productID_1" class="btn-upload">Upload Product</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/prod2.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset1"></div>
					Wholesale price:  <strong>12,50 €</strong><br/>
					Retail price:  <strong>36,00 €</strong> <br/>
					Stock: <strong>50 pieces</strong><br/>
					Size range: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_2" />
				<label for="productID_2" class="btn-upload">Upload Product</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/prod3.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset1"></div>
					Wholesale price:  <strong>12,50 €</strong><br/>
					Retail price:  <strong>36,00 €</strong> <br/>
					Stock: <strong>50 pieces</strong><br/>
					Size range: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_3" />
				<label for="productID_3" class="btn-upload">Upload Product</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/prod4.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset1"></div>
					Wholesale price:  <strong>12,50 €</strong><br/>
					Retail price:  <strong>36,00 €</strong> <br/>
					Stock: <strong>50 pieces</strong><br/>
					Size range: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_4" />
				<label for="productID_4" class="btn-upload">Upload Product</label>
			</div>
		</div>
	</div>
	<div class="row productRow">
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/prod3.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset1"></div>
					Wholesale price:  <strong>12,50 €</strong><br/>
					Retail price:  <strong>36,00 €</strong> <br/>
					Stock: <strong>50 pieces</strong><br/>
					Size range: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_5" />
				<label for="productID_5" class="btn-upload">Upload Product</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?php echo base_url() ?>assets/frontoffice/img/temp/prod4.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset1"></div>
					Wholesale price:  <strong>12,50 €</strong><br/>
					Retail price:  <strong>36,00 €</strong> <br/>
					Stock: <strong>50 pieces</strong><br/>
					Size range: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_6" />
				<label for="productID_6" class="btn-upload">Upload Product</label>
			</div>
		</div>
	</div>
	
</div>
<!-- content homepage end -->
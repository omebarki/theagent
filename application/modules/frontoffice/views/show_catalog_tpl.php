<!-- Page Content -->
<div class="container mainContainer" role="main">
	<div class="row">
		<div class="brandDetailsBlock row-same-height row-full-height">
			<div class="brandInfos col-xs-height col-full-height">
				<div class="brandLogo"><img src="<?= base_url() ?>assets/frontoffice/img/temp/logo-angels.jpg" width="600" height="147" alt="Angels never die"></div>
				<div class="brandAbout">
					<h4>About the brand</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
				</div>
				<div class="brandLogistics">
					<h4>About the logistic</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
				<div class="brandContact">
					<h4>Sales contact</h4>
					<div class="dTable">
						<p class="dTableCell"><img src="<?= base_url() ?>assets/frontoffice/img/temp/business-man.jpg" width="100" height="100" alt=""></p>
						<p class="dTableCell">
							<strong>Bertrand Thoral</strong></br>
							Phone: +33 1 45 677 897</br>
							Mail: bertrand@theagent.com
						</p>
					</div>
				</div>
			</div>
			<div class="brandImage col-xs-height col-full-height" style="background:url('<?= base_url() ?>assets/frontoffice/img/temp/banner-brand.jpg') no-repeat center center scroll;">
				<div class="buttonHolder clearfix">
					<div class="col-md-3"><a class="btn btn-lg btn-default btn-default-black">Show me my selection</a></div>
					<div class="col-md-3"><a class="btn btn-lg btn-default btn-default-black">Plan the sales</a></div>
					<div class="col-md-3"><a class="btn btn-lg btn-default btn-default-black">Marketing material</a></div>
					<div class="col-md-3"><a class="btn btn-lg btn-default btn-default-black">Download the pack</a></div>
				</div>
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

<!-- content homepage -->
<div class="container mainContainer" role="main">
	<div role="alert" class="alert alert-agent">
    	<?= lang("sales") ?>: <strong><?= $catalog_details->saleName ?></strong> <span>|</span> <?= lang("nb_products") ?>: <?= $catalog_details->nbPF ?> <span>|</span> <?= lang("nb_skus") ?>: <?= $catalog_details->nbSku ?> <span>|</span> <?= lang("stock") ?>: <?= $catalog_details->totalStock ?>
    </div>
	<div class="row">
		<div class="col-md-3 text-center brandInfoCol">
			<img src="<?= base_url() ?>assets/frontoffice/img/temp/abaco-logo.jpg" width="240" height="123" alt="Abaco"><br />
			<a class="btn btn-lg btn-primary"><?= lang("add_to_wishlist") ?></a>
			<a class="btn btn-lg btn-default btn-default-black"><?= lang("add_to_wishlist") ?></a>
			<a class="btn btn-lg btn-default btn-default-black"><?= lang("plan_the_sales") ?></a>
			<a class="btn btn-lg btn-default btn-default-black"><?= lang("see_the_stock") ?></a>
			<a class="btn btn-lg btn-default btn-default-black"><?= lang("marketing_material") ?></a>
			<a class="btn btn-lg btn-default btn-default-black"><?= lang("upload_the_pack") ?></a>
		</div>
		<div class="col-md-9"><img src="<?= base_url() ?>assets/frontoffice/img/temp/bigbanner-1.jpg" width="893" height="388" class="img-responsive"></div>
	</div>
	<div class="row">
		<div class="col-md-3 text-center">
			<h3><?= lang("sales_contact") ?></h3>
			<p><img src="<?= base_url() ?>assets/frontoffice/img/temp/business-man.jpg" width="150" height="150" alt="Business Man"></p>
			<p>
			<strong><?= $catalog_details->firstname.' '.$catalog_details->lastname ?></strong></br>
			<?= lang("phone") ?>: <?= $catalog_details->phone1 ?></br>
			<?= lang("email") ?>: <?= $catalog_details->email ?>
			</p>
		</div>
		<div class="col-md-9">
			<div class="col-md-6">
				<h3><?= lang("about_the_brand") ?></h3>
				<p id="viewdetails_1" class="viewdetails collapse"><?= $catalog_details->brandDescription ?></p>
				<p><a data-target="#viewdetails_1" data-toggle="collapse" class="btn btn_viewdetails"><?= lang("view_details") ?> »</a></p>
			</div>
			<div class="col-md-6">
				<h3><?= lang("logistic_information") ?></h3>
				<p id="viewdetails_2" class="viewdetails collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><a data-target="#viewdetails_2" data-toggle="collapse" class="btn btn_viewdetails"><?= lang("view_details") ?> »</a></p>
			</div>
		</div>
	</div>
	<div class="voffset4"></div>
	<div class="filterbyForm clearfix">
		<form class="navbar-form navbar-right">
			<div class="form-group">
				<label class="control-label"><?= lang("filter") ?></label>
				<select class="selectpicker" data-width="auto" data-style="agentSelect">
					<option value=""><?= lang("looking_for") ?></option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="form-group">
				<label class="control-label"><?= lang("sort") ?></label>
				<select class="selectpicker" data-width="auto" data-style="agentSelect">
					<option value=""><?= lang("all") ?></option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		</form>
	</div>
	<?php if( ! empty($catalog_products)): ?>
	<?php foreach($catalog_products as $index => $product): ?>
	<?php if($index%4 == 0): ?>
	<div class="row productRow">
	<?php endif ?>	
		<div class="col-md-3">
			<div class="productColumn">
				<div class="productImage"><img src="<?= base_url() ?>assets/frontoffice/img/temp/prod1.jpg" width="248" height="248" alt="Product name" class="img-responsive" /></div>
				<div class="productInfo clearfix">
					<span class="productName">SAC JAMILY MARRON</span><br/>
					Sac en cuir grainé pour femme.
					<div class="voffset<?= $index ?>"></div>
					<?= lang("wholesale_price") ?>:  <strong>12,50 €</strong><br/>
					<?= lang("retail_price") ?>:  <strong>36,00 €</strong> <br/>
					<?= lang("Stock_price") ?>: <strong>50 pieces</strong><br/>
					<?= lang("size_range") ?>: <strong>one size</strong>
				</div>
			</div>
			<div class="productCheck">
				<input type="checkbox" id="productID_<?= $index ?>" />
				<label for="productID_<?= $index ?>" class="btn-upload"><?= lang("upload_product") ?></label>
			</div>
		</div>
	<?php if($index%4 == 0): ?>
	</div>
	<?php endif ?>
	<?php endforeach ?>
	<?php endif ?>
</div>
<!-- content homepage end -->
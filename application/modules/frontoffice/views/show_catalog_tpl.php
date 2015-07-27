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
	
	<div class="row filterBlock">
		<div class="rowFilter fr clearfix">
			<a class="showLess"></a>
			<a class="showMore active"></a>
		</div>
		<a class="btn btn-primary fr">Add the sales to my selection</a>
	</div>
	
	<div class="row" id="productList">
	<?php if( ! empty($catalog_products)): ?>
	<?php foreach($catalog_products as $index => $product): ?>
		<div class="col-md-2">
			<div class="productColumn">
				<img src="<?= base_url() ?>assets/frontoffice/img/temp/prod1.jpg" width="248" height="248" alt="Product name" class="img-responsive" />
				<div class="productInfo clearfix">
					<p class="productName">SAC JAMILY MARRON</p>
					<p>Sac en cuir grainé pour femme.</p>
					<div class="clearfix"></div>
					<p><?= lang("wholesale_price") ?>:  <strong class="price">12,50 €</strong></p>
					<p><?= lang("retail_price") ?>:  <strong class="price">36,00 €</strong></p>
					<p><?= lang("Stock_price") ?>: <strong class="price">50 pieces</strong></p>
					<p><?= lang("size_range") ?>: <strong class="price">one size</strong></p>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	<?php endif ?>
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
	<?php if( ! empty($catalog_products)): ?>
	<?php foreach($catalog_products as $index => $product): ?>
	<?php if($index%4 == 0): ?>
	<div class="row productRow">
	<?php endif ?>	
		<div class="col-md-3">
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
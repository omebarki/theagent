<!-- Page Content -->
<div class="container mainContainer" role="main">
	<div class="row">
		<div class="brandDetailsBlock row-same-height row-full-height">
			<div class="brandImage topBrandImage" style="background:url('<?= base_url() ?>assets/frontoffice/img/temp/banner-brand.jpg') no-repeat center center scroll;"></div>
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
				<div class="buttonHolder clearfix">
					<div class="col-xs-6 tac"><a class="btn btn-default btn-default-black">Marketing material</a></div>
					<div class="col-xs-6 tac"><a class="btn btn-default btn-default-black">Download the pack</a></div>
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
			</div>
		</div>
	</div>
	
	<div class="row filterBlock">
		<div class="rowFilter fr clearfix">
			<a class="showLess"></a>
			<a class="showMore active"></a>
		</div>
		<a class="btn btn-primary fr" id="addFullSale">Add the sales to my selection</a>
		<div id="addSuccess" class="fr">
			<i class="upArrow"></i>
			<a class="close">X</a>
			<p class="successMessage tac">
				<span>THANK YOU!</span><br /><br />
				The sales have been added to your selection
			</p>
			<div class="row">
				<div class="col-xs-6 saleInfoCol"><a class="btn btn-default">Continue my shopping</a></div>
				<div class="col-xs-6 saleInfoCol"><a class="btn btn-primary" id="planSalesButton">Plan the sales</a></div>
				<div class="cb"></div>
				<div id="planSalesForm" style="display:none;">
					<div class="col-md-6 col-md-push-3 separator"></div>
					<div class="cb"></div>
					<div class="col-xs-6 saleInfoCol">
						Sales starting date
						<div class="input-group date">
						  <input type="text" class="form-control" id="datetimepicker1"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					</div>
					<div class="col-xs-6 saleInfoCol">
						Sales finishing date
						<div class="input-group date">
						  <input type="text" class="form-control" id="datetimepicker2"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					</div>
					<div class="col-xs-6 saleInfoCol">
						Our sales reference
						<input type="text" placeholder="ANGELS NEVER DIE / 3605" class="form-control haveMargin" readonly="readonly" />
					</div>
					<div class="col-xs-6 saleInfoCol">
						Your sales reference
						<input type="text" class="form-control haveMargin" />
					</div>
					<div class="cl cr"></div>
					<div class="col-xs-6 col-md-push-6 saleInfoCol"><a class="btn btn-primary">Send your request</a></div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="productDetails">
		<div class="prodWrapper">
			<a class="close">X</a>
			<div class="col-sm-5 imageColumn">
				<div><img src="<?= base_url() ?>assets/frontoffice/img/temp/prod-grand.jpg" /></div>
				<ul class="productThumbs">
					<li class="active"><img src="<?= base_url() ?>assets/frontoffice/img/temp/small_1.jpg" /></li>
					<li><img src="<?= base_url() ?>assets/frontoffice/img/temp/small_2.jpg" /></li>
					<li><img src="<?= base_url() ?>assets/frontoffice/img/temp/small_3.jpg" /></li>
				</ul>
			</div>
			<div class="col-sm-7 detailsColumn">
				<p class="productName">Sarouel <span class="price">THYME</span></p>
				<span class="brand">Angels Never Die</span>
				<div class="productDesc">Sarouel en coton. Fermeture par zip et bouton à l'avant. Passants ceinture. Deux poches à l'avant. Pattes de boutonnage au dos. Finitions revers. Longueur : 78 cm. Info taille: le mannequin porte ce produit en taille T36. Le mannequin mesure 1m70, mensurations 88cm / 60cm / 88 cm.<br /><br />
	Information taille : Fruitrouge vous indique les équivalences des tailles des marques en taille française (36/38/40). Il peut néanmoins y avoir des nuances pour certaines marques, nous vous invitons à consulter le guide de tailles ci-dessous pour plus dinformations.
				</div>
				<p><?= lang("wholesale_price") ?>:  <strong>12,50 €</strong></p>
				<p><?= lang("recommanded_retail_price") ?>:  <strong>36,00 €</strong></p>
				<p><?= lang("stock") ?>: <strong>50 pieces</strong></p>
				<div class="productButtons">
					<a class="btn btn-primary">Add the sales to my selection</a>
					<a class="btn btn-default btn-default-black">Download the product</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row" id="productList">
	<?php if( ! empty($catalog_products)): ?>
	<?php foreach($catalog_products as $index => $product): ?>
		<div class="col-lg-2 col-md-3 col-xs-6">
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
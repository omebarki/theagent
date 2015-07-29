<!-- Page Content -->
<div class="container mainContainer" role="main">
	<div class="row">
		<div class="brandDetailsBlock row-same-height row-full-height">
			<div class="brandImage topBrandImage" style="background:url('http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $details->idSaleFruitrouge ?>/annonce.jpg') no-repeat center center scroll;"></div>
			<div class="brandInfos col-xs-height col-full-height">
				<div class="brandLogo"><img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $details->idSaleFruitrouge ?>/titleFR-fr.jpg" width="600" height="147" alt="<?= $details->brandName ?>"></div>
				<div class="brandAbout">
					<h4><?= lang('about_the_brand') ?></h4>
					<p><?= $details->brandDescription ?></p>
				</div>
				<div class="brandLogistics">
					<h4><?= lang('logistic_information') ?></h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
				<div class="buttonHolder clearfix">
					<div class="col-xs-6 tac"><a class="btn btn-default btn-default-black"><?= lang('marketing_material') ?></a></div>
					<div class="col-xs-6 tac"><a class="btn btn-default btn-default-black"><?= lang('download_the_pack') ?></a></div>
				</div>
				<div class="brandContact">
					<h4><?= lang('sales_contact') ?></h4>
					<div class="dTable">
						<p class="dTableCell"><img src="<?= base_url() ?>assets/frontoffice/img/temp/business-man.jpg" width="100" height="100" alt=""></p>
						<p class="dTableCell">
							<strong><?= $details->firstname.' '.$details->lastname ?></strong></br>
							<?= lang('phone') ?>: <?= $details->phone1 ?></br>
							<?= lang('email') ?>: <?= $details->email ?>
						</p>
					</div>
				</div>
			</div>
			<div class="brandImage col-xs-height col-full-height" style="background:url('http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $details->idSaleFruitrouge ?>/annonce.jpg') no-repeat center center scroll;">
				<div class="prodWrapper">
					<a class="close">X</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row filterBlock">
		<div class="rowFilter fr clearfix">
			<a class="showLess"></a>
			<a class="showMore active"></a>
		</div>
		<a class="btn btn-primary fr" id="addFullSale"><?= lang('add_sale_to_selection') ?></a>
		<div id="addSuccess" class="floatWindow">
			<i class="upArrow"></i>
			<a class="close">X</a>
			<p class="successMessage tac">
				<span><?= lang('thank_you') ?></span><br /><br />
				<?= lang('sale_added_to_selection') ?>
			</p>
			<div class="row">
				<div class="col-xs-6 saleInfoCol"><a class="btn btn-default"><?= lang('continue_my_shopping') ?></a></div>
				<div class="col-xs-6 saleInfoCol"><a class="btn btn-primary" id="planSalesButton"><?= lang('plan_sale') ?></a></div>
				<div class="cb"></div>
				<div id="planSalesForm" style="display:none;">
					<div class="col-md-6 col-md-push-3 separator"></div>
					<div class="cb"></div>
					<div class="col-xs-6 saleInfoCol">
						<?= lang('sale_starting_date') ?>
						<div class="input-group date">
						  <input type="text" class="form-control" id="datetimepicker1"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					</div>
					<div class="col-xs-6 saleInfoCol">
						<?= lang('sale_finishing_date') ?>
						<div class="input-group date">
						  <input type="text" class="form-control" id="datetimepicker2"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					</div>
					<div class="col-xs-6 saleInfoCol">
						<?= lang('our_sale_reference') ?>
						<input type="text" placeholder="ANGELS NEVER DIE / 3605" class="form-control haveMargin" readonly="readonly" />
					</div>
					<div class="col-xs-6 saleInfoCol">
						<?= lang('your_sale_reference') ?>
						<input type="text" class="form-control haveMargin" />
					</div>
					<div class="cl cr"></div>
					<div class="col-xs-6 col-md-push-6 saleInfoCol"><a class="btn btn-primary"><?= lang('send_your_request') ?></a></div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="productDetails" class="floatWindow">
	</div>
	
	<div class="row" id="productList">
	<?php if( ! empty($products)): ?>
	<?php foreach($products as $index => $product): ?>
		<div class="col-lg-2 col-md-3 col-xs-6">
			<div class="productColumn" title="<?= $product->name ?>" data-id="<?= $product->id ?>">
				<img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $details->idSaleFruitrouge ?>/product_<?= $product->id ?>/max_0.jpg" width="248" height="248" alt="<?= $product->name ?>" class="img-responsive" />
				<div class="productInfo clearfix">
					<p class="productName"><?= $product->name ?></p>
					<p><?= $product->description ?></p>
					<div class="clearfix"></div>
					<p><?= lang("wholesale_price") ?>:  <strong class="price"><?= $product->price ?> €</strong></p>
					<p><?= lang("retail_price") ?>:  <strong class="price"><?= $product->retailPrice ?> €</strong></p>
					<p><?= lang("stock_pieces") ?>: <strong class="price"><?= $product->totalStock ?> <?= lang('pieces') ?></strong></p>
					<p><?= lang("size_range") ?>: <strong class="price"><?= $product->sizeRange ?></strong></p>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	<?php endif ?>
	</div>
	<?= $this->load->view('frontoffice/loading_tpl') ?>
</div>
<!-- content homepage -->
<?php get_instance()->load->helper('date') ?>
<div class="container mainContainer homeContainer" role="main">
	<?php if( ! empty($list_catalog)): ?>
	<?php foreach($list_catalog as $index => $catalog): ?>
	<?php if($index%2 == 0): ?>
	<div class="row">
	<?php endif ?>
		<div class="col-md-6">
			<div class="brandBanner">
				<a href="/frontoffice/catalog/show/<?= $catalog->id ?>">
					<img src=" http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $catalog->idSaleFruitrouge ?>/currentSaleV4.jpg" width="571" height="437" class="img-responsive">
					<img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $catalog->idSaleFruitrouge ?>/baselineFR-fr.jpg" width="571" height="437" class="img-responsive">
			    </a>
			</div>
			<div class="brandInfo clearfix">
				<div class="col-md-6"><?= lang("brand") ?> : <span><?= $catalog->brandName ?></span></div>
				<div class="col-md-6 tar"><?= lang("available_until") ?> : <span><?= nice_date($catalog->dateEnd, 'm/d/Y') ?></span></div>
				<div class="col-md-12"><?= lang("sku") ?> : <span><?= $catalog->nbSku ?></span></div>
				<div class="col-md-4"><?= lang("stock") ?> : <span><?= $catalog->totalStock ?></span></div>
				<div class="col-md-8 tar"><?= lang("ws_price_range") ?> : <span><?= $catalog->minPrice ?>€ / <?= $catalog->maxPrice ?>€</span></div>
			</div>
		</div>
	<?php if($index%2 == 0): ?>
	</div>
	<?php endif ?>
	<?php endforeach ?>
	<?php endif ?>
	<div class="row">
		<div class="col-md-2 col-md-push-5">
			<div class="progress agentProgress">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped active"><span class="sr-only">60% Complete</span></div>
			</div>
		</div>
		<div class="loadingBarLabel text-center">chargement en cours ...</div>
	</div>
	
</div>
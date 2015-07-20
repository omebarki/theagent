<!-- content homepage -->
<?php get_instance()->load->helper('date') ?>
<div class="container mainContainer" role="main">
	<?php if( ! empty($list_catalog)): ?>
	<div class="row">
	<?php foreach($list_catalog as $index => $catalog): ?>
		<div class="col-lg-4 col-sm-6">
			<div class="brandColumn">
				<a href="/frontoffice/catalog/show/<?= $catalog->id ?>">
					<img id="img_sale_<?= $catalog->id ?>" src=" http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $catalog->idSaleFruitrouge ?>/currentSaleV4.jpg" width="450" height="340" class="img-responsive">
					<img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $catalog->idSaleFruitrouge ?>/baselineFR-fr.jpg" width="450" height="340" class="img-responsive">
			    </a>
			    <a class="addToFavorites" data-sale="sale_<?= $catalog->id ?>" title="<?= lang('mark_as_favorite_brand') ?>"></a>
				<div class="brandInfo clearfix">
					<div class="fr cr tar"><?= lang("available_until") ?> : <span><?= nice_date($catalog->dateEnd, 'm/d/Y') ?></span></div>
					<div class=""><?= lang("brand") ?> : <span><?= $catalog->brandName ?></span></div>
					<div class=""><?= lang("sku") ?> : <span><?= $catalog->nbSku ?></span></div>
					<div class="fr cr tar"><?= lang("ws_price_range") ?> : <span><?= $catalog->minPrice ?>€ / <?= $catalog->maxPrice ?>€</span></div>
					<div class=""><?= lang("stock") ?> : <span><?= $catalog->totalStock ?></span></div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div>
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
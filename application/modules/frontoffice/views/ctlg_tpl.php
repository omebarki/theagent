<?php get_instance()->load->helper('date') ?>
<div class="brandColumn">
	<a href="/frontoffice/catalog/show/<?= $catalog->id ?>">
		<img id="img_<?= $catalog->id ?>" src=" http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $catalog->idSaleFruitrouge ?>/currentSaleV4.jpg" width="450" height="340" class="img-responsive">
    </a>
    <a class="addToFavorites <?php if(isset($actives[$catalog->id]) or isset($active)): ?>active<?php else: ?>inactive<?php endif;?>" data-catalog="<?= $catalog->id ?>" title="<?= lang('mark_as_favorite_brand') ?>"></a>
	<div class="brandInfo clearfix">
		<div class="fr cr tar"><?= lang("available_until") ?> : <span><?= nice_date($catalog->dateEnd, 'm/d/Y') ?></span></div>
		<div class=""><?= lang("brand") ?> : <span><?= $catalog->brandName ?></span></div>
		<div class=""><?= lang("sku") ?> : <span><?= $catalog->nbSku ?></span></div>
		<div class="fr cr tar"><?= lang("ws_price_range") ?> : <span><?= $catalog->minPrice ?>€ / <?= $catalog->maxPrice ?>€</span></div>
		<div class=""><?= lang("stock") ?> : <span><?= $catalog->totalStock ?></span></div>
	</div>
</div>
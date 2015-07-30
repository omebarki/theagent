<div class="col-lg-2 col-md-3 col-xs-6">
	<div class="productColumn" title="<?= $product->name ?>" data-id="<?= $product->id ?>">
		<img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $product->idSaleFruitrouge ?>/product_<?= $product->id ?>/catalog_grand.jpg" width="248" height="248" alt="<?= $product->name ?>" class="img-responsive" />
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
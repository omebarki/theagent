<div class="prodWrapper">
	<a class="close">X</a>
	<div class="col-sm-5 imageColumn">
		<div><img id="mainImg" src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $infos->idSaleFruitrouge ?>/product_<?= $infos->id ?>/max_0.jpg" width="250"/></div>
		<ul class="productThumbs">
			<?php foreach($images as $index => $img): ?>
			<li <?php if($index == 0): ?>class="active"<?php endif; ?> data-index="<?= $img ?>"><img src="http://media<?= rand(1,3) ?>.fruitrouge.com/data/sale/sale_<?= $infos->idSaleFruitrouge ?>/product_<?= $infos->id ?>/small_<?= $img ?>.jpg" /></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="col-sm-7 detailsColumn">
		<p class="productName"> <span class="price"></span></p>
		<span class="brand"></span>
		<div class="productDesc">
			<?= $infos->description ?>
		</div>
		<p><?= lang("wholesale_price") ?>:  <strong><?= $infos->price ?> €</strong></p>
		<p><?= lang("retail_price") ?>:  <strong><?= $infos->retailPrice ?> €</strong></p>
		<p><?= lang("stock_pieces") ?>: <strong><?= $infos->totalStock ?> <?= lang('pieces') ?></strong></p>
		<p><?= lang("size_range") ?>: <strong class="price"><?= $infos->sizeRange ?></strong></p>
		<div class="productButtons">
			<a class="btn btn-primary"><?= lang('add_prod_to_selection') ?></a>
			<a class="btn btn-default btn-default-black"><?= lang('prod_added_to_selection') ?></a>
		</div>
	</div>
</div>
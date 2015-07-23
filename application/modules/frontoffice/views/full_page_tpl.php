<div id="fullPageContainer">
	<div class="overText"><div class="tr"><img src="<?= base_url() ?>assets/frontoffice/img/bg-homepage-text-<?= lang('lg') ?>.png" width="863" height="199" alt="<?= lang('homepage_text') ?>"></div></div>
	<div id="searchBlock">
		<div class="container">
			<form type="POST" action="/frontoffice/catalog/">
				<input type="text" required placeholder="<?= lang('looking_for') ?>" class="form-control" id="lookingFor" />
				<input type="text" placeholder="<?= lang('sale_start') ?>" class="form-control datepicker" id="datetimepicker1" />
				<input type="text" placeholder="<?= lang('sale_end') ?>" class="form-control datepicker" id="datetimepicker2" />
				<select class="selectpicker" id="skuselect">
					<option><?= lang('select_sku') ?></option>
				</select>
				<input type="submit" value="<?= lang('search') ?>" class="btn btn-lg btn-primary" />
			</form>
		</div>
	</div>
</div>
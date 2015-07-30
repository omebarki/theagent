<?php get_instance()->load->helper(array('form')) ?>
<div id="fullPageContainer">
	<div class="overText"><div class="tr"><img src="<?= base_url() ?>assets/frontoffice/img/bg-homepage-text-<?= lang('lg') ?>.png" width="863" height="199" alt="<?= lang('homepage_text') ?>"></div></div>
	<div id="searchBlock">
		<div class="container">
			<?= form_open('/frontoffice/catalog', ['role' => 'form', 'id' => 'filters']) ?>
				<input type="text" placeholder="<?= lang('looking_for') ?>" class="form-control" id="lookingFor" name="search" <?php if(isset($filters['search'])): ?>value="<?= $filters['search'] ?>"<?php endif; ?>/>
				<input type="text" placeholder="<?= lang('sale_start') ?>" class="form-control datepicker" id="datetimepicker1" name="dateStart_dt" <?php if(isset($filters['dateStart_dt'])): ?>value="<?= $filters['dateStart_dt'] ?>"<?php endif; ?>/>
				<?php if(isset($filters['dateStart'])): ?>
					<input type="hidden" name="dateStart" value="<?= $filters['dateStart'] ?>"/>
				<?php endif; ?>
				<input type="text" placeholder="<?= lang('sale_end') ?>" class="form-control datepicker" id="datetimepicker2" name="dateEnd_dt" <?php if(isset($filters['dateEnd_dt'])): ?>value="<?= $filters['dateEnd_dt'] ?>"<?php endif; ?>/>
				<?php if(isset($filters['dateEnd'])): ?>
					<input type="hidden" name="dateEnd" value="<?= $filters['dateEnd'] ?>"/>
				<?php endif; ?>
				<select class="selectpicker" id="skuselect" name="sku">
					<option value=""><?= lang('select_sku') ?></option>
				</select>
				<input type="submit" value="<?= lang('search') ?>" class="btn btn-lg btn-primary" />
			<?= form_close() ?>
		</div>
	</div>
</div>
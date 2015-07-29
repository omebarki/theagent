<!-- content homepage -->
<div class="container mainContainer" role="main">
	<?php if( ! empty($list_catalog)): ?>
	<div class="row">
	<?php foreach($list_catalog as $index => $catalog): ?>
		<div class="col-lg-4 col-sm-6 brandColumnBlock">
			<?= $this->load->view('frontoffice/ctlg_tpl',array('catalog'=>$catalog)) ?>
		</div>
	<?php endforeach ?>
	</div>
	<?php endif ?>
	<?= $this->load->view('frontoffice/loading_tpl') ?>
</div>

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
	<div class="row">
		<div class="col-md-2 col-md-push-5">
			<div class="progress agentProgress">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped active"><span class="sr-only">60% Complete</span></div>
			</div>
		</div>
		<div class="loadingBarLabel text-center">chargement en cours ...</div>
	</div>
</div>
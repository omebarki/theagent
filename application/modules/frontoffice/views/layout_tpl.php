<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>The Agent - <? echo $title ?></title>

<!-- Bootstrap -->
<link href="<?php echo base_url() ?>assets/common/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/common/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/common/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/common/js/bootstrap-select.min.js"></script>

<!-- The agent resets and styles -->
<link href="<?php echo base_url() ?>assets/frontoffice/css/reset.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/bootstrap-select.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/theagent-defaults.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/global.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontoffice/css/<?php echo $page_style ?>.css" rel="stylesheet">
</head>
<body>

<?php echo $content ?>

<!-- footer begin -->
<footer class="footer fullwidth-bar">
	<div class="container">
		<p class="text-muted">Place sticky footer content here.</p>
	</div>
</footer>
<!-- footer end -->

<script type="text/javascript">
  window.onload = function () {
	  $('.selectpicker').selectpicker();
  };
</script>

</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url('asset/favicon.ico'); ?>" type="image/x-icon">
		<!-- CSS -->
		<link href="<?php echo base_url('asset/components/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('asset/components/bootstrap-datepicker/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('asset/components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

		<link href="<?php echo base_url('asset/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>

		<header>
			<?php $this->load->view('core/navigation'); ?>
		</header>

		<main>
			<?php $this->load->view($page); ?>
		</main>

		<!-- Main Script -->
		<script src="<?php echo base_url('asset/components/jquery/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/components/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/components/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>

		<script>
		$(".datepicker").datepicker({
			format: "yyyy/mm/dd",
			autoclose: true,
			todayHighlight: true
		});
		</script>

		<script src="<?php echo base_url('asset/components/angular/angular.min.js'); ?>"></script>
	</body>
</html>

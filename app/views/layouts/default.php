<?php
	use Core\Session;
	use Core\H;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="icon" href="<?=PROOT?>img/favicon.png" type="image/png">
		<title><?= $this->siteTitle('Home'); ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?=PROOT?>css/bootstrap.css">
		<link rel="stylesheet" href="<?=PROOT?>vendors/linericon/style.css">
		<link rel="stylesheet" href="<?=PROOT?>css/themify-icons.css">
		<link rel="stylesheet" href="<?=PROOT?>vendors/owl-carousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=PROOT?>vendors/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?=PROOT?>vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=PROOT?>vendors/nice-select/css/nice-select.css">
		<!-- style.css lives in the <$this->content('head'); > section of te individual view template file -->

		<?= $this->content('head'); ?>
	</head>
	<body>
		<?php include 'main_menu.php'; ?>
		<div class="" style="min-height: cal(100% - 125px);">
			<?= Session::displayMsg(); ?>
			<?= $this->content('body'); ?>
		</div>




		<?php include 'footer.php'; ?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="<?=PROOT?>js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>js/popper.js"></script>
		<script type="text/javascript" src="<?=PROOT?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>js/stellar.js"></script>
		<script type="text/javascript" src="<?=PROOT?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>vendors/isotope/isotope-min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>vendors/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>js/jquery.ajaxchimp.min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>js/mail-script.js"></script>
		<!--gmaps Js-->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script type="text/javascript" src="<?=PROOT?>js/gmaps.min.js"></script>
		<script type="text/javascript" src="<?=PROOT?>js/theme.js"></script>
	</body>
</html>
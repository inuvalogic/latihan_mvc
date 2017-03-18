<!DOCTYPE html>
<html>
<head>
	<title>Belajar Membuat Website MVC</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/mobile.css">
</head>
<body>

	<header>
		<a href="<?php echo BASE_URL ?>"><img class="logo" src="<?php echo ASSETS_URL ?>images/logo.png"></a>
	</header>

	<?php echo $this->loadView('layout/menu'); ?>
	
	<?php echo $content; ?>

	<?php echo $this->loadView('layout/footer'); ?>

	<script type="text/javascript" src="<?php echo ASSETS_URL ?>js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL ?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL ?>js/slider.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL ?>js/mobilemenu.js"></script>

</body>
</html>
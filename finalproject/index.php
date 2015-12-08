<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Aplus</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
	
	<script src="js/vendor/modernizr.js"></script>
	<script src="js/virgo.js"></script>
</head>
<body>
<!--Start Header-->
		<?php include './logo_social.php'; ?>
		<!-- Navigation Start -->
		<?php
		include 'nav.php';
		?>
		<!-- End Navgation -->

	
			<!--Navigation for mobile-->
		<?php include './mobile_nav.php'; ?>
        	<!--End Navigation for mobile-->
		<?php include './banner.php'; ?>
			<!--End banner image-->
	
    	<?php //include './running_news.php'; ?>
			<!--End running news-->
<!--End Header-->
	<!--Start Container-->
    <?php include 'container.php'; ?>
	<!--End Container-->
	<?php include 'footer.php'; ?>


	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.orbit.js"></script>
	<script src="js/foundation/foundation.reveal.js"></script>
	
	<script>
		$(document).foundation();
	</script>
</body>
</html>
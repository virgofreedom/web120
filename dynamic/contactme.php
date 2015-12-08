<?php
$name = $_POST['name'];
include './includes/doc.php';
?>

<body>

<?php include './includes/header.php'; ?>
 <!--End hearder-->
<div id="wrapper">
	<div class="box">
		<h1>
			Thank you, <?=$name?>, for your submition! I will contact with you as soon as possible!
		</h1>
	</div>
</div>
<!--end wrapper-->

<?php include './includes/footer.php'; ?>


</body>
</html>


<?php
$name = $_POST['name'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to WEB 120</title>
<link rel="stylesheet" href="css/virgo.css">
<link rel="stylesheet" href="css/contact.css">
</head>

<body>
<div id="wrapper">
	<div class="container transparent contact">
    	<div class="main" id="contact">
        	<h1 class="myfont">Thank you, <?=$name?>, for your submition! I will contact with you as soon as possible!</h1>
        </div>
    </div>
    <footer>
        <small>
   &copy; 2015, All Rights Reserved ~ Authored by Sara Newman ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>↩
   </small>
   </footer>
</div>
</body>
</html>
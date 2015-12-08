<?php
	if (date("Y") > 2015)
	{
		$Syear = "2015";
		$Eyear = "-".date("Y");
	}else{
		$Syear = "Oct 2015";
		$Eyear = "-".date("M Y");
	}
	
?>
<footer>
	<div id="copyright">
		&copy; <?=$Syear.$Eyear?>, All Rights Reserved ~ Rattana NEAK ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
	</div> 
	<div id="social">
		<a href="facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a>
		<a href="https://plus.google.com"><i class="fa fa-google-plus-square fa-2x"></i></a>		
	</div>
	
</footer>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.orbit.js"></script>
	<script src="js/foundation/foundation.reveal.js"></script>
	
	<script>
		$(document).foundation();
	</script>
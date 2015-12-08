<?php
include 'db_html.php';
$con = mysqli_connect($host, $user, $password, $database);
$logo_sql = "Select * from news";
$result = mysqli_query($con, $logo_sql) or die(mysqli_error($con));
?>
<div class="small-12 columns running-text">
		<marquee width="100%">
        	 <?php
			while ($row = mysqli_fetch_array($result))
			{
				echo '
				<span>'.$row['contain'].'</span>
				';
			}
			?>
        </marquee>
</div>
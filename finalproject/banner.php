<?php
include 'db_html.php';
$con = mysqli_connect($host, $user, $password, $database);
$logo_sql = "Select * from banner";
$result = mysqli_query($con, $logo_sql) or die(mysqli_error($con));
?>
<div class="small-12 columns">
		<ul class="example-orbit" data-orbit>
        
			 <?php
			while ($row = mysqli_fetch_array($result))
			{
				echo '
				<li class="active">
				<img src="'. $row['link'] . '" alt="'. $row['caption'] . '" />
				<div class="orbit-caption">
				'. $row['caption'] . '
				</div>
			</li>
				';
			}
			?>
            <!--<li>
				<img src="img/img.png" alt="slide 1" />
				<div class="orbit-caption">
				Caption One.
				</div>
			</li>
			<li class="active">
				<img src="img/img1.png" alt="slide 2" />
				<div class="orbit-caption">
				Caption Two.
				</div>
			</li>
			<li>
				<img src="img/img2.png" alt="slide 3" />
				<div class="orbit-caption">
				Caption Three.
				</div>
			</li>-->
		</ul>
	</div>
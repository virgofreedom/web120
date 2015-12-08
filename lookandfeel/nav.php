<?php
include 'db_html.php';
$con = mysqli_connect($host, $user, $password, $database);
$sql = "Select * from nav where type='menu'";
$array_mid = array();
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<nav class="nav-main">
			<ul>
<?php 
while ($row = mysqli_fetch_array($result))
{ 
$sql_count_mid = "Select * from nav where mid='".$row['mid']."'";
$result_count = mysqli_query($con, $sql_count_mid) or die(mysqli_error($con));
$count_mid = mysqli_num_rows($result_count);
	?>
				<li>
					<a href="#" class="nav-item"><?=$row['caption']?>

<?php 
if ($count_mid > 1)
{
	echo '<span class="droparrow">&#x25BC;</span>';
	echo '</a>';
	echo '
	<div class="nav-content">
			<div class="nav-sub">
				<ul>';
				$sql_sub_menu = "Select * from nav where mid='".$row['mid']."' and type ='sub-menu'";
				$result_sub = mysqli_query($con, $sql_sub_menu) or die(mysqli_error($con));
				while ($row_sub = mysqli_fetch_array($result_sub)) 
				{
					echo '
			<li><a href="#">'.$row_sub['caption'].'</a></li>
			';
				}
	echo'		</ul>
			</div>
	</div>
	';
}
else{
echo '</a>';		
}
echo '</li>';		
}

?>
					
				
			</ul>
</nav>
<?php
$lang = $_GET['lang'];
$con = mysqli_connect("localhost","ssrschoo_rattana","200987");
		if (!$con)
  			{
  			die('Could not connect: ' . mysqli_error($con));
  			}
		mysqli_select_db($con, "ssrschoo_rattana");
	$sql = "select * from profile_".$lang;
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
		while ($row = mysqli_fetch_array($result))
		{
			$name = $row['Name'];$dob = $row['Dob'];$job =$row['Job'];
			$add = $row['Adress'];$email = $row['Email'];
			$phone = $row['Phone'];$web = $row['Website'];
			$desc = $row['short_descript'];
		}
		
		$date=date_create($dob);
		
		if ($lang == "en")
		{$dob = date_format($date,"M-d-Y");}
		else
		{
		$dob = date_format($date,"d-m-Y");
		}
		
?>
<!-- profile -->
                                            <div id="profile" class="content_2">
<!-- .title -->
<h1 class="h-bloc">Profile - About Me</h1>

<div class="row top-p">
    <div class="col-md-6 profile-l">
 		
        <!--About me-->
        <div class="title_content">
            <div class="text_content"><?php echo $name; ?></div>
            <div class="clear"></div>
        </div>

		   <ul class="about">

            <li>
                <i class="fa fa-calendar"></i>
                <label>Date of birth</label>
                
                <span class="value"><?php echo $dob; ?></span>
                <div class="clear"></div>
            </li>

            <li> 
                <i class="fa fa-map-marker"></i>
                <label>Adress</label>
                <span class="value"><?php echo $add; ?></span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="fa fa-envelope"></i>
                <label>Email</label>
                <span class="value"><?php echo $email; ?></span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="fa fa-phone"></i>
                <label>Phone</label>
                <span class="value"><?php echo $phone; ?></span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="fa fa-globe"></i>
                <label>Website</label>
                <span class="value"><a href="http://<?php echo $web; ?>" target="_blank"><?php echo $web; ?></a></span>
                <div class="clear"></div>
            </li>

        </ul>


       
    </div>
    <!-- End left-wrap -->

    <div class="col-md-6 profile-r">

        <div class="cycle-slideshow">
            <img src="img/web1.jpg" alt="" />
            <img src="img/web2.jpg" alt="" />
            <img src="img/web3.png" alt="" />
        </div>

    </div>

</div>
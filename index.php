<?php
$page = $_GET['p'];
$con = mysqli_connect("localhost","ssrschoo_rattana","200987");
		if (!$con)
  			{
  			die('Could not connect: ' . mysqli_error($con));
  			}
		mysqli_select_db($con, "ssrschoo_rattana");

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>Welcome to my website!</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>

        <!-- CSS | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

        <!-- CSS | font-awesome -->
        <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
        <!-- CSS | animate -->
        <!-- Credits: http://daneden.github.io/animate.css/ -->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
		<link rel="stylesheet" href="css/contact.css">
        <!-- CSS | Normalize -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css" />
       	
        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="css/colors/DarkBlue.css" id="colors-style" />
        <link rel="stylesheet" type="text/css" href="css/switcher.css" />
        
        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="css/main.css" />
		 <link rel="stylesheet" type="text/css" href="css/mymain.css" />
        <!-- CSS | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/> 

		<!-- CSS | Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<script type="text/javascript" src="js/virgo.js"></script>
        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/icons/font-awesome-ie7.min.css"/>
        <![endif]-->

        <style>
            @media only screen and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
                }
            }
			
			@media only screen and (min-width : 800px) and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
					width:89%;
                }
            }		

        </style>

    </head>

    <body onLoad="active_menu('<?php echo $page;?>');">

        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Laoding page -->
        <div id="preloader"><div id="spinner"></div></div>

        <!-- .slideshow -->
        <ul class="cb-slideshow" id="cb_slideshow" style="display:none">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul> 
        <!-- /.slideshow --> 

        <!-- .wrapper --> 
        <div class="wrapper">

            <!--- .Content --> 
            <section class="tab-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">   

                                <div class="col-md-3 widget-profil">
                                    <div class="row">

    <!-- Profile Image -->
    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">
    	 
		 
                                
         <div class="image-holder one" id="pic_prof_1" style="display:block">
        
                <img class="head-image up circle" src="img/profile_pic.jpg" width="150" height="150" alt="" />
                
        </div>
        
        <!-- style for simple image profile -->		
   		<div class="circle-img" id="pic_prof_2" style="display:none"></div>
       
    
    </div>
    <!-- End Profile Image -->
  
    <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
    
    
        <!-- Profile info -->
        <?php
		$lang = $_GET['lang'];
		$sql = "select * from profile_".$lang;
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
		while ($row = mysqli_fetch_array($result))
		{
			$name = $row['Name'];$dob = $row['Dob'];$job =$row['Job'];
			$add = $row['Adress'];$email = $row['Email'];
			$phone = $row['Phone'];$web = $row['Website'];
			$desc = $row['short_descript'];
		}
        ?>
        <div id="profile_info">
            <h1 id="name" class="transition-02"><?php echo $name;?></h1>
            <h4 class="line"><?php echo $job;?></h4>
            <h6><span class="fa fa-map-marker"></span> <?php echo $add;?></h6>
        </div>
        <!-- End Profile info -->  
    	
        
        <!-- Profile Description -->
        <div id="profile_desc">
            <p>
            	<?php echo $desc;?>
            </p>
           
        </div>
        <!-- End Profile Description -->  
    	
        
        <!-- Name -->
         <div id="profile_social">
            <h6>My Social Profiles</h6>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-foursquare"></i></a>
            <div class="clear"></div>
        </div>
        <!-- End Name -->  
      
    
    
    </div>
  
</div>                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul id="list_menu" class="resp-tabs-list">
                                            <li onclick="link_go('index.php','<?php echo $_GET['p'];?>','kh','')" class="lang" data-tab-name="khmer">
                                            <img class="flag" src="img/cambodia.png" alt=""> </li>
                                            <li href="#" onclick="link_go('index.php','<?php echo $_GET['p'];?>','en','')" class="lang" data-tab-name="usa">
                                            <img class="flag" src="img/usa.png" alt=""> </li>
      
                                            <li class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile"
onclick="link_go('index.php','profile','<?php echo $_GET['lang'];?>','');">			
                                                <span class="tite-list">profile</span>
                                                <i class="fa fa-user icon_menu icon_menu_active"></i>
                                            </li>

                                            <li class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="resume"
onclick="link_go('index.php','resume','<?php echo $_GET['lang'];?>','')"> 
                                                <span class="tite-list">resume</span>
                                                <i class="fa fa-tasks icon_menu"></i>
                                            </li>

                                            <li class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="portfolio"
onclick="link_go('index.php','portfolio','<?php echo $_GET['lang'];?>','')"> 
                                                <span class="tite-list">portfolio</span>
                                                <i class="fa fa-briefcase icon_menu"></i>
                                            </li>

                                            <li class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="blog"
onclick="link_go('index.php','blog','<?php echo $_GET['lang'];?>','&id=all')">
                                                <span class="tite-list">blog</span>
                                                <i class="fa fa-bullhorn icon_menu"></i>
                                            </li>

                                            <li class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="contact" style="margin-bottom: 48px !important;"
onclick="link_go('index.php','contact','<?php echo $_GET['lang'];?>','')"> 
                                                <span class="tite-list">contact</span>
                                                <i class="fa fa-envelope icon_menu"></i> 
                                            </li>


                                        </ul>
                                        <!-- /resp-tabs-list -->



                                        <!-- resp-tabs-container --> 
                                        <div class="resp-tabs-container">
<?php
if ($page == "profile")
{
	include 'profile.php';
}

else if ($page == "login")
{
	include 'login.php';
}
else if ($page == "contact")
{
	include 'contactme.html';
}
else if ($page == "thx")
{
	include 'contactme.php';
}
else
{
include 'under_cont.html';	
}
?>
                                           

                                        </div>
                                        <!-- End #resp-tabs-container --> 

                                    </div><!-- End verticalTab -->

                                </div><!-- End flexy_content -->


                            </div><!-- End row -->

                        </div><!-- End col-md-12 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </section>
            <!-- End Content -->

        </div>
        <!-- End wrapper -->

       



        <!-- jquery | jQuery 1.11.0 -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 		
        <!-- Js | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        
        <!-- Js | jquery.cycle -->
        <!-- Credits: https://github.com/malsup/cycle2 -->
        <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
        
        <!-- jquery | rotate and portfolio -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script> 
        <script type="text/javascript" src="js/HeadImage.js"></script>

        <!-- Js | easyResponsiveTabs -->
        <!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
        <script type="text/javascript" src="js/easyResponsiveTabs.min.js"></script> 

        <!-- Js | jquery.cookie -->
        <!-- Credits: https://github.com/carhartl/jquery-cookie --> 
        <script type="text/javascript" src="js/jsSwitcher/jquery.cookie.js"></script>	

        <!-- Js | switcher -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <!--script type="text/javascript" src="js/jsSwitcher/switcher.js"></script>	

        <!-- Js | mCustomScrollbar -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>		

        <!-- jquery | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        
        <!-- Js | gmaps -->
        <!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/gmaps.min.js"></script>

 		<!-- Js | Js -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <script type="text/javascript" src="js/main.js"></script>
        
        <!-- code js for image rotate -->
        <script type="text/javascript">

            var mouseX;
            var mouseY;
            var imageOne;

            /* Calling the initialization function */
            $(init);

            /* The images need to re-initialize on load and on resize, or else the areas
             * where each image is displayed will be wrong. */
            $(window).load(init);
            $(window).resize(init);

            /* Setting the mousemove event caller */
            $(window).mousemove(getMousePosition);

            /* This function is called on document ready, on load and on resize
             * and initiallizes all the images */
            function init() {

                /* Instanciate the mouse position variables */
                mouseX = 0;
                mouseY = 0;

                /* Instanciate a HeadImage class for every image */
                imageOne = new HeadImage("one");

            }

            /* This function is called on mouse move and gets the mouse position. 
             * It also calls the HeadImage function to display the correct image*/
            function getMousePosition(event) {

                /* Setting the mouse position variables */
                mouseX = event.pageX;
                mouseY = event.pageY;

                /*Calling the setImageDirection function of the HeadImage class
                 * to display the correct image*/
                imageOne.setImageDirection();

            }

        </script>


        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </body>
</html>
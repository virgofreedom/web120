<?php
include 'includes/doc.php'; 
?>
<?php include 'includes/config.php'; ?>
<body>
<!--Start Header-->
	<?php include 'includes/header.php'; ?>	
<!--End Header-->
<!--Start Container-->
	<div id="container">
		<div class="ads">
			<img src="img/bg_white.jpg" />
			<?php include 'includes/ads-left.php'; ?>
		</div>
		<div class="container inner">
			<h1 class="categories">Registration :</h1>
			<form role="form" method="post" action="new_reg.php">
      
                        <fieldset>
                        <div class="form-group" style="display:none">
                        
                        </div>
                            <div class="form-group"> Last Name :
                                <input class="form-control" placeholder="Last Name" name="Lname" type="text"​ required>
                            </div>
                            <div class="form-group"> First Name:
                                <input class="form-control" placeholder="First Name" name="Fname" type="text" required>
                            </div>
							<div class="form-group"> Date of Birth:
                                <input class="form-control" placeholder="mm/dd/yyyy" name="DoB" type="date" required>
                            </div>
                            <div class="form-group">Sex :
                                <select name="Sex" class="form-control" required>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            
                            <div class="form-group">Phone Number :
                                <input class="form-control" placeholder="010xxxxxx" name="Phone" type="text" required>
                            </div>          
                            <div class="form-group">Email (optional):
                                <input class="form-control" placeholder="E-mail" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="button"  name="register" type="submit" value="Register">
                            </div>
                            
                            
                           
                        </fieldset>
                        

                    </form>

		</div>
	</div>    
<!--End Container-->
<!--Start Footer-->
	<?php include 'includes/footer.php'; ?>
</body>
</html>
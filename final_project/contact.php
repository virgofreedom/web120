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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8107299188096!2d104.90299797829623!3d11.565422131519469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109510d44f85809%3A0x220eeea3cddb2480!2z4Z6Y4Z6H4Z-S4Z6I4Z6Y4Z6O4Z-S4Z6M4Z6b4Z6f4Z624Z6f4Z-S4Z6P4Z-S4Z6a4Z624Z6f4Z-S4Z6b4Z654Z6A4Z6a4Z654Z6P!5e0!3m2!1sen!2sus!4v1449545651911" frameborder="0" style="border:0; width:100%" allowfullscreen></iframe>
			<p>#131 St 132, Sangkat Teuk Laork 1 Khan Toul Kork, Phnom Penh Cambodia </p>
			<?php include 'includes/ads-left.php'; ?>
		</div>
		<div class="container inner">
			<h1 class="categories">Please leave your message:</h1>
			<form action="#" method="post" class="form-horizontal">
			  <div class="form-group">
				<label  >From</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="inputFrom" placeholder="From" required>
				</div>
			  </div>
              <div class="form-group">
				<label >Email</label>
				<div class="col-sm-9">
				  <input type="email" class="form-control" name="inputEmail" placeholder="example@gmail.com" required>
				</div>
			  </div>
			  <div class="form-group">
				<label   >Subject</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="inputSubject" placeholder="Subject" required>
				</div>
			  </div>
			  <div class="form-group">
				<label  >Message</label>
				<div class="col-sm-9">
				  
				  <textarea class="form-control" rows="7" name="inputMessage" placeholder="Message" required></textarea>
				</div>
             
			  </div>
              <div class="form-group">
					<div class="col-sm-9 col-sm-offset-2">
              		<div class="g-recaptcha" data-sitekey="6LexawYTAAAAAHGLA2JLN32H_78wzNqkfWihQ0CU"></div >  
					
					</div>
              </div>
              
			  <div class="form-group">
				<div class="col-sm-offset-9 col-sm-2">
				  <button type="submit" class="button button-primary">Send</button>
				</div>
			  </div>
			</form>

		</div>
	</div>    
<!--End Container-->
<!--Start Footer-->
	<?php include 'includes/footer.php'; ?>
</body>
</html>
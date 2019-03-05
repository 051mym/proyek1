<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'header.php';?>

	<section id="contact" class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
							<h2>Login PKL</h2>
							<div class="separetor"></div>
							<p>Silahkan Login diri untuk akses lebih lanjut</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="messsage_contant">
						<div class="col-md-12 col-sm-12">
							<div class="single_message_left wow fadeIn" data-wow-duration="1s">
								<form action="config.php" method="post" id="formid">
										<!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
										  
										 <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="username" placeholder="Username" required="">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<input type="password" class="form-control" name="password" placeholder="Password" required="">
												</div>
											</div>
										 </div>
										
										  

										  <div class="form-group">
											<textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
										  </div>

										  <div class="center">
											<input type="submit" value="Login" class="btn btn-lg" name="login">
											  <div class="container signin">
    											<p><b>Don't have account? <a href="regis.php">Sign Up</a>.</b></p>
  											  </div>
										  </div>
										<!--</div>--> 
								</form>
							</div>
						</div>
						</div> <!-- End of messsage contant-->
				</div>
			</div>
		</section>	

<?php include 'script.php';?>
</body>
</html>
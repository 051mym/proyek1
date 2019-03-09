<?php include 'config.php'; ?>
<!DOCTYPE html >
<html lang="en">
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>
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
            					<div class="center">
            						<?php echo $Err; ?>
          						</div>
								<form method="post" id="formid">
										 <div class="row">
										 	<div class="col-md-3"></div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="number" class="form-control" name="username" placeholder="Username" required="">
												</div>
											</div>
											<div class="col-md-3"></div>
										</div>
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="password" class="form-control" name="password" placeholder="Password" required="" pattern="^[A-Za-z0-9]+">
												</div>
											</div>
											<div  class="col-md-3"></div>
										</div>
										</div>
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-6">
													<div class="row">
														<div class="form-group col-md-3">
															<input type="text" name="vercode" placeholder="Enter Captcha" class="form-control" required="required" />&nbsp;
														</div>
														<div class="col-md-3"><img class="form-control"  src="captcha/captcha.php"></div>
														<div class="col-md-6"></div>
													</div>
											</div>
											<div class="col-md-3"></div>
										</div>
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-6">
												<input type="submit" value="Login" class="form-control" name="login"><br>
    											<p><b>Don't have account? <a href="regis.php">Sign Up</a>.</b></p>
											</div>
											<div class="col-md-3"></div>
										</div>
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
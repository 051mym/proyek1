<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>	
<section id="contacts" class="team">
		<div class="container">
			<form method="post">
			<div class="row">
				<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
					<h2>Pilih Akun</h2>
					<div class="separetor"></div>
					<p>Pilih akun sesuai status anda</p>
				</div>
				<div class="main_featured_content">
					<div class="col-md-4 col-sm-6 col-xs-12 single_featured_area">
						<div class="single_featured wow fadeIn" data-wow-duration=".5s">
							<img src="images/f1.png" alt="" height="270"/>
							<div class="featured_overlay">
								<div class="overlay_content">
									<input type="Submit" class="btn btn-white btn-link" value="Mahasiswa" name="regis" >
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 single_featured_area">
						<div class="single_featured wow fadeIn" data-wow-duration=".5s">
							<img src="images/f2.png" alt="" height="270" />
							<div class="featured_overlay">
								<div class="overlay_content">
									<input type="Submit" class="btn btn-white btn-link" value="Dosen" name="regis" >
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 single_featured_area">
						<div class="single_featured wow fadeIn" data-wow-duration=".5s">
							<img src="images/f3.png" alt="" height="270" />
							<div class="featured_overlay">
								<div class="overlay_content">
									<input type="Submit" class="btn btn-white btn-link" value="Perusahaan" name="regis" >
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			</form>
		</div>
	</section>

<?php include 'script.php';?>
</body>
</html>


	
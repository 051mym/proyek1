<?php include'config.php';?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>
<?php
    $user = $_SESSION['login_user'];
    if ($_SESSION['login'] == 'Admin') {
        $result = mysqli_query($mysqli, "SELECT * FROM admin WHERE id=$user");
        $user_data = mysqli_fetch_array($result);
        $id = $user_data['id'];
    } elseif ($_SESSION['login'] == 'Mahasiswa') {
        $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE npm=$user");
        $user_data = mysqli_fetch_array($result);
        $npm = $user_data['npm'];
        # foto
    } elseif ($_SESSION['login'] == 'Dosen') {
        $result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE nip=$user");
        $user_data = mysqli_fetch_array($result);
        $nip = $user_data['nip'];
        # foto
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM perusahaan WHERE id=$user");
        $user_data = mysqli_fetch_array($result);
        $id = $user_data['id'];
        $fax = $user_data['fax'];

    }
      $nama = $user_data['nama'];
      $email = $user_data['email'];
      $pwd = $user_data['password'];
      $nohp = $user_data['nohp'];
       
?>
<section id="testimonial" class="testimonial">
		<div class="testimonial_overlay">
			<div class="container">
				<div class="row">
					<div class="head_title text-center wow slideInDown" data-wow-duration="0.5s">
						<h2>Profile <?php echo $_SESSION['login']; ?> </h2>
						<div class="separetorwhite2"></div>
						<h5><?php echo $nama; ?></h5>
					</div>
					<div class="main_testimonial text-center wow fadeIn" data-wow-duration="1s">
						<div class="single_testimonial">
							<div class="single_testimonial_img">
								<img class="img-circle" src="images/tst1.jpg" alt="" />
				<!-- 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,m quia.</p>
								<a href="">RAF REDWAN</a> -->
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-6">
										<div class="row">
											<p>E-mail	:	<?php echo $email ?></p>
											<p>Phone	:	<?php echo $nohp ?></p>
											<?php
											if ($_SESSION['login']=='Perusahaan') {
												echo '<p>Fax	:	'.$fax.'</p>';
											}
											?>
											<a href="edit.php"><i class="fa fa-gears"></i> Edit Profile</a>

										</div>
									</div>
									<div class="col-sm-3"></div>
									<!-- <div class="col-sm-4"></div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<?php include 'script.php';?>
</body>
</html>
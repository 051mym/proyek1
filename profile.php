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
    } elseif ($_SESSION['login'] == 'Dosen') {
        $result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE nip=$user");
        $user_data = mysqli_fetch_array($result);
        $nip = $user_data['nip'];
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
								<?php if ($_SESSION['login']=='Mahasiswa') {
									echo '<img width="170" height="170" class="img-circle" src="files/profile/mahasiswa/profile-'.$npm.'.jpg" alt="profil mahasiswa" />';
								} elseif ($_SESSION['login']=='Dosen') {
									echo '<img width="170" height="170" class="img-circle" src="files/profile/dosen/profile-'.$nip.'.jpg" alt="profile dosen" />';
								} elseif ($_SESSION['login']=='Perusahaan') {
									echo '<img width="170" height="170" class="img-circle" src="images/gdg.jpg" alt="profile perusahaan" />';
								} else {
									echo '<img width="170" height="170" class="img-circle" src="images/admn1.png" alt="profile admin" />';
								}
								?>
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-6">
										<div class="row">
											<p>Id 		:   <?php echo $_SESSION['login_user'] ?></p>
											<p>E-mail	:	<?php echo $email ?></p>
											<p>Phone	:	<?php echo $nohp ?></p>
											<?php
											if ($_SESSION['login']=='Perusahaan') {
												echo '<p>Fax	:	'.$fax.'</p>';
											}
											if ($_SESSION['login'] != "Admin") {
												echo '<a href="edit.php"><i class="fa fa-gears"></i> Edit Profile</a>';
											}
											?>
										</div>
									</div>
									<div class="col-sm-3"></div>
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
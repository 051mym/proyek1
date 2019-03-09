<?php include'config.php';?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>

	<section id="steps" class="steps">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow fadeIn" data-wow-duration="1.5s">
					<h2>Langkah - langkah <?php echo $_SESSION['login'];?></h2>
					<div class="separetor"></div>
				</div>
				<div class="main_steps_content text-center">

					<?php 
						if ($_SESSION['login']=="Mahasiswa") {
							echo 	'
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="1s">
											<a href="m_pengajuan.php"><i class="fa fa-file-pdf-o"></i></a>
											<h4>Melengkapi Berkas</h4>
											<p>Mahasiswa mengupload berkas proposal Universitas dan proposal Praktik Kerja Lapangan </p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="1.8s">
											<a href="m_status.php"><i class="fa fa-spinner"></i></a>
											<h4>Menunggu Persetujuan</h4>
											<p>Mahasiswa menunggu persetujuan Praktik Kerja Lapangan dari dosen pembimbing dan perusahaan</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="2.8s">
											<a href="#"><i class="fa fa-user-plus"></i></a>
											<h4>Praktik Kerja Lapangan</h4>
											<p>Mahasiswa melakukan Praktik Kerja Lapangan sesuai dengan kesepakatan antar mahasiswa dan perusahaan</p>
										</div>
									</div>
									';
						} elseif ($_SESSION['login']=="Dosen") {
							echo 	'
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="1s">
											<a href=""><i class="fa fa-check"></i></a>
											<h4>Persetujuan Dosen</h4>
											<p>Dosen bersedia menjadi pembimbing Praktik Kerja Lapangan mahasiswa</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="1.8s">
											<a href=""><i class="fa fa-spinner"></i></a>
											<h4>Menunggu Persetujuan perusahaan</h4>
											<p>Dosen menunggu persetujuan Praktik Kerja Lapangan dari perusahaan</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="2.8s">
											<a href=""><i class="fa fa-users"></i></a>
											<h4>Dosen Pembimbing</h4>
											<p>Dosen membimbing mahasiswa dalam melakukan Praktik Kerja Lapangan sesuai kesepakatan dengan mahasiswa </p>
										</div>
									</div>
									';
						} elseif ($_SESSION['login']=="Perusahaan") {
							# code...
							echo 	'
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="1s">
											<a href=""><i class="fa fa-file-pdf-o"></i></a>
											<h4>Upload Persetujuan</h4>
											<p>Perusahaan mengupload berkas persetujuan menerima mahasiswa Praktik Kerja Lapangan</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="1.8s">
											<a href=""><i class="fa fa-check"></i></a>
											<h4>Menerima Mahasiswa</h4>
											<p>Perusahaan bersedia menerima mahasiswa melakukan Praktik Kerja Lapangan diperusahaan</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="2.8s">
											<a href=""><i class="fa fa-user-plus"></i></a>
											<h4>Praktik Kerja Lapangan</h4>
											<p>Mahasiswa melakukan Praktik Kerja Lapangan sesuai dengan kesepakatan dengan perusahaan</p>
										</div>
									</div>
									';
						} else {
							echo '
								<div class="col-md-4">
									<div class="single_steps wow fadeIn" data-wow-duration="1s">
										<a href=""><i class="fa fa-file-pdf-o"></i></a>
										<h4>Verifikasi Dokumen Pengajuan PKL</h4>
										<p>Admin memverifikasi data dan dokumen mahasiswa yg mengajukan Prakrik Kerja Lapangan</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="single_steps wow fadeIn" data-wow-duration="1.8s">
										<a href=""><i class="fa fa-check"></i></a>
										<h4>Admin Menerima Pengajuan PKL</h4>
										<p>Dengan menerima pengajuan Praktik Kerja Lapangan admin telah memverifikasi dokumen sehingga proses pengajuan PKL bisa dilanjutkan</p>
									</div>
								</div>
								<div class="col-md-4">
										<div class="single_steps wow fadeIn" data-wow-duration="2.8s">
											<a href=""><i class="fa fa-user-plus"></i></a>
											<h4>Praktik Kerja Lapangan</h4>
											<p>Mahasiswa melakukan Praktik Kerja Lapangan sesuai dengan kesepakatan dengan perusahaan</p>
										</div>
									</div>
								'		;

						}
					?>

				</div>
			</div>
		</div>
	</section>

<?php include 'script.php';?>
</body>
</html>
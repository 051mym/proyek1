<?php include'config.php'; ?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>
<section id="contacts" class="team">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
					<h2>Pengajuan Praktik Kerja Lapangan</h2>
					<div class="separetor"></div>
				</div><br>
				<div>
				<table class="table left">
					<thead>
						<tr>
							<th>Id Pengajuan</th>
							<th>NPM</th>
							<th>Dosen Pembimbing</th>
							<th>Admin</th>
							<th>Proses Pengajuan</th>
							<th>Diproses Admin</th>
							<th>Diproses Dosen</th>
							<th>Status</th>
						</tr>
					</thead>
						<tbody>
							<?php 
							$user = $_SESSION['login_user'];
							$result = mysqli_query($mysqli, "SELECT * FROM pengajuanpkl WHERE status='4' AND perusahaan='$user' ORDER BY id ASC ");
							 while($row = $result->fetch_assoc()){
							echo '
								<tr>
								<form method="POST">
								<td>'.$row['id'].'</td>
								<td>'.$row['npm'].'</td>
								<td>'.$row['dosen'].'</td>
								<td>'.$row['admin'].'</td>
								<td>'.$row['tglpengajuan'].'</td>
								<td>'.$row['tglaccadmin'].'</td>
								<td>'.$row['tglaccdosen'].'</td>
								<td>Diterima</td>
								</form>
								</tr>';      
								}      
							?>
						</tbody>
					</table>										
				</div>
			</div>
		</div>
</section>
<?php include 'script.php';?>
</body>
</html>
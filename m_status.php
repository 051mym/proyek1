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
					<h2>Status Pengajuan Praktik Kerja Lapangan</h2>
					<div class="separetor"></div>
				</div><br>
				<div>
				<table class="table left">
					<thead>
						<tr>
							<th>Id Pengajuan</th>
							<th>NPM</th>
							<th>Perusahaan</th>
							<th>Dosen</th>
							<th>Status</th>
							<th>Acc Admin</th>
							<th>Acc Dosen</th>
							<th>Acc Perusahaan</th>
						</tr>
					</thead>
						<tbody>
							<?php 
							$user = $_SESSION['login_user'];
							$result = mysqli_query($mysqli, "SELECT * FROM pengajuanpkl WHERE npm='$user' ORDER BY id DESC ");
							while($row = mysqli_fetch_array($result)) {
							echo '
								<tr>
								<td>'.$row['id'].'</td>
								<td>'.$row['npm'].'</td>
								<td>'.$row['perusahaan'].'</td>
								<td>'.$row['dosen'].'</td>
								<td>'.$row['status'].'</td>
								<td>'.$row['tglaccadmin'].'</td>
								<td>'.$row['tglaccdosen'].'</td>
								<td>'.$row['tglaccadmin'].'</td>
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
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
							<th>Perusahaan</th>
							<th>Admin</th>
							<th>Dosen Pembimbing</th>
							<th>Proses Pengajuan</th>
							<th>Proses Admin</th>
							<th>Proses Dosen</th>
							<th>Proses Perusahaan</th>
							<th>Status</th>
						</tr>
					</thead>
						<tbody>
							<?php 
							$user = $_SESSION['login_user'];
							$result = mysqli_query($mysqli, "SELECT * FROM pengajuanpkl WHERE npm='$user' ORDER BY id DESC ");
							while($row = mysqli_fetch_array($result)) {
								if ($row['status'] == "1") {
									$status = "Diproses Admin";
								} elseif ($row['status'] == "2") {
									$status = "Diproses Dosen";
								} elseif ($row['status'] == "3") {
									$status = "Diproses Perusahaan";
								} elseif ($row['status'] == "4") {
									$status = "Diterima";
									$status='<a class="btn-link" href="files/berkas/berkasperusahaan/" download="berkasperusahaan-'.$row["perusahaan"].'.pdf">Diterima</a>';
								} else {
									$status = "Ditolak";
								}
							echo '
								<tr>
								<td>'.$row['id'].'</td>
								<td>'.$row['pnama'].'</td>
								<td>'.$row['anama'].'</td>
								<td>'.$row['dnama'].'</td>
								<td>'.$row['tglpengajuan'].'</td>
								<td>'.$row['tglaccadmin'].'</td>
								<td>'.$row['tglaccdosen'].'</td>
								<td>'.$row['tglaccperusahaan'].'</td>
								<td>'.$status.'</td>
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
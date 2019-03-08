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
							<th>Dosen</th>
							<th>Proses Pengajuan</th>
							<th>Action</th>
						</tr>
					</thead>
						<tbody>
							<?php 
							$user = $_SESSION['login_user'];
							$result = mysqli_query($mysqli, "SELECT * FROM pengajuanpkl WHERE status='1' ORDER BY id ASC ");
							while($row = mysqli_fetch_array($result)) {
							echo '
								<tr>
								<form method="POST">
								<td>'.$row['id'].'</td>
								<td>'.$row['perusahaan'].'</td>
								<td>'.$row['dosen'].'</td>
								<td>'.$row['tglpengajuan'].'</td>
								<input type="hidden" name="id_list" readonly value="'.$row["id"].'">
                            	<td><input type="Submit" class="btn btn-link" value="Accept " name="accept">|<input type="Submit" class="btn btn-link" value=" Deceline" name="deceline"></td>
								<td></td>
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
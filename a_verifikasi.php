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
							<th>Perusahaan</th>
							<th>Dosen Pembimbing</th>
							<th>Proses Pengajuan</th>
							<th>Action</th>
						</tr>
					</thead>
						<tbody>
							<?php 
							$user = $_SESSION['login_user'];
							$result = mysqli_query($mysqli, "SELECT * FROM pengajuanpkl WHERE status='1' ORDER BY id ASC ");
							 while($row = $result->fetch_assoc()){
							echo '
								<tr>
								<form method="POST">
								<td>'.$row['id'].'</td>
								<td>'.$row['npm'].'</td>
								<td>'.$row['pnama'].'</td>
								<td>'.$row['dnama'].'</td>
								<td>'.$row['tglpengajuan'].'</td>
								<input type="hidden" name="id" readonly value="'.$row['id'].'">
                            	<td><input type="Submit" class="form-control" value="Accept " name="accept"></td>
								<td><input type="Submit" class="form-control" value=" Deceline" name="deceline"></td>
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
<?php include'config.php'; $user=$_SESSION['login_user'];?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>

<section id="contacts" class="team">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
					<h2>Berkas Persetujuan Perusahaan</h2>
					<div class="separetor"></div>
				</div><br>
				<form method="post" enctype="multipart/form-data">

					<div class="form-group">
					  	<label for="berkasproposa" class="control-label col-sm-2">Berkas Perusahaan :</label>
					    <div>
					      <input required type="file" class="form-control-file" name="berkasperusahaan">
					      <input  type="submit" class="btn btn-submit" name="p_persetujuan" value="Save">
					 	</div>
					</div>
					<div class="center">
						<embed src="files/berkas/berkasperusahaan/berkasperusahaan-<?php echo $user; ?>.pdf" type="application/pdf" width="100%" height="600px" />
					</div>
					
				</form>
				
				
			</div>
		</div>
</section>

<?php include 'script.php';?>
</body>
</html>
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
				<div>
				<form method="post" enctype="multipart/form-data">

					<div class="form-group">
					  	<label for="berkasperusahaan" class="control-label col-sm-2">Berkas Perusahaan :</label>
					    <div class=" col-sm-3">
					      <input required type="file" class="form-control-file" name="berkasperusahaan">Maks 4056 KB (*.PDF)					      
					 	</div>
					 	<div class="col-sm-2">
					 	<input  type="submit" class="form-control" name="p_persetujuan" value="Save">
					 	</div>
					</div>
				</div>
					<div class="center">
						<embed src="files/berkas/berkasperusahaan/berkasperusahaan-<?php echo $user; ?>.pdf" type="application/pdf" width="100%" height="800" />
					</div>
					
				</form>
				
				
			</div>
		</div>
</section>
<?php include 'script.php';?>
</body>
</html>
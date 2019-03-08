<?php include'config.php';?>
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
					<p>Isi data-data berikut untuk mengajukan Praktik Kerja Lapangan</p>
				</div><br>
				<div>									
					<form class="form-horizontal" method="post" enctype="multipart/form-data">

			          	<div class="form-group">
			            <label for="perusahaan" class="control-label col-sm-2">Perusahaan :</label>
			            <div class="col-sm-10">
				            <select required name="perusahaan" class="form-control dropdown-toggle">
				         		<option value="" selected >Pilih Perusahaan</option>
						            <?php
						              $result = mysqli_query($mysqli, "SELECT * FROM perusahaan ");
						              if ($result->num_rows > 0) {
						              while($row = $result->fetch_assoc()) {
						                  echo '
						                        <option value="'.$row['nama'].'">'.$row['nama'].'</option>
						                       ';
						                }
						            }
						            ?>
				            </select>
				        </div>
			          	</div>
			          	<div class="form-group">
			            <label for="dosen" class="control-label col-sm-2">Dospem :</label>
			            <div class="col-sm-10">
				            <select required name="dosen" class="form-control dropdown-toggle">
				         		<option value="" selected >Pilih Dosen Pembimbing</option>
						            <?php
						              $result = mysqli_query($mysqli, "SELECT * FROM dosen ");
						              if ($result->num_rows > 0) {
						              while($row = $result->fetch_assoc()) {
						                  echo '
						                        <option value="'.$row['nama'].'">'.$row['nama'].'</option>
						                       ';
						                }
						            }
						            ?>
				            </select>
				        </div>
			          	</div>
			          	<!-- upload file -->
			          	<div class="form-group"> 
			          	<label for="berkasuniv" class="control-label col-sm-2">Berkas Universitas :</label>
					    <div class="col-sm-offset-2 col-sm-10">
					      <input required type="file" class="form-control-file" name="berkasuniv">
					    </div>
					  </div>

					  <div class="form-group">
					  	<label for="berkasproposa" class="control-label col-sm-2">Berkas Proposal :</label>
					    <div class="col-sm-offset-2 col-sm-10">
					      <input required type="file" class="form-control-file" name="berkasproposal">
					    </div>
					  </div>

			          	<!-- upload file -->
					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn pink-btn" name="m_pengajuan">Submit</button>
					    </div>
					  </div>

					</form>
				</div>
			</div>
		</div>
</section>

<?php include 'script.php';?>
</body>
</html>
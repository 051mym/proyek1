<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>
  <section id="team" class="team">
    <div class="container">
      <div class="row">
        <div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
          <h2>Sign Up <?php echo $_SESSION["regis"]; ?></h2>
          <div class="separetor"></div>
        </div>
        
        <div class="main_team_content text-center">
            <form method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                    
                  <?php
                  if ($_SESSION["regis"] == "Mahasiswa") {
                    echo '<div class="form-group">
                    <label for="npm">NPM :</label>
                    <input type="number" class="form-control" name="npm" pattern="^[0-9]+$">
                  </div>';
                  } elseif ($_SESSION["regis"] == "Dosen") {
                    echo '<div class="form-group">
                    <label for="nip">NIP :</label>
                    <input type="number" class="form-control" name="nip" pattern="^[0-9]+$">
                  </div>';
                  } elseif ($_SESSION["regis"] == "Perusahaan") {
                    echo '<div class="form-group">
                    <label for="id">ID :</label>
                    <input type="number" class="form-control" name="id" pattern="^[0-9]+$">
                  </div>';
                  }
                  ?>
                  <div class="form-group">
                    <label for="nama">Name :</label>
                    <input type="text" class="form-control" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="email">E-mail :</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" pattern="^[A-Za-z0-9]+">
                  </div>

                  <div class="form-group">
                    <label for="hp">Phone Number :</label>
                    <input type="number" class="form-control" name="nohp">
                  </div>
                  <?php 
                  if ($_SESSION["regis"] != "Perusahaan") {
                    echo '<div class="form-group">
                    <label for="foto">Foto :</label>
                    <input type="file" class="form-control-file" name="foto" > Maks 2.048 KB (.jpg)
                  </div>';
                  } else {
                    echo '<div class="form-group">
                    <label for="fax">Fax :</label>
                    <input type="text" class="form-control" name="fax">
                  </div>';
                  } ?>

                  </div>
                <div class="col-sm-4"></div>
              </div>
              <div class="row">
              <button type="submit" class="btn btn-submit" name="signup">Submit</button>
              </div>
            </form>
        </div>

      </div>
    </div>
  </section>

<?php include 'script.php';?>
</body>
</html>


<?php 
include 'head.php'; include "config.php";
?>
<!DOCTYPE html>
<html>

<body>
  
  <section id="team" class="team">
    <div class="container">
      <div class="row">
        <div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
          <h2>Sign Up <?php echo $_SESSION["regis"]; ?></h2>
          <div class="separetor"></div>
        </div>
        
        <div class="main_team_content text-center">
            <form action="/action_page.php">
              <div class="row">
                <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                    
                  <?php
                  if ($_SESSION["regis"] == "Mahasiswa") {
                    echo '<div class="form-group">
                    <label for="npm">NPM :</label>
                    <input type="number" class="form-control" name="npm">
                  </div>';
                  } elseif ($_SESSION["regis"] == "Dosen") {
                    echo '<div class="form-group">
                    <label for="npm">NIP :</label>
                    <input type="number" class="form-control" name="nip">
                  </div>';
                  } elseif ($_SESSION["regis"] == "Perusahaan") {
                    echo '<div class="form-group">
                    <label for="npm">NPM :</label>
                    <input type="number" class="form-control" name="npm">
                  </div>';
                  }
                  ?>

                  <div class="form-group">
                    <label for="email">E-mail :</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                    <label for="nama">Name :</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="hp">Phone :</label>
                    <input type="number" class="form-control" name="hp">
                  </div>
<!--              <div class="form-group">
                    <label for="foto">Password:</label>
                    <input type="text" class="form-control" id="pwd">
                  </div> -->
                  </div>
                <div class="col-sm-4"></div>
              </div>
              <div class="row">
              <button type="submit" class="btn btn-default" name="regis_mahasiswa">Submit</button>
              </div>
            </form>
        </div>

      </div>
    </div>
  </section>

<?php include 'script.php';?>
</body>
</html>



<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
  <?php include 'navbar.php';?>
  <?php
    $user = $_SESSION['login_user'];
    if ($_SESSION['login'] == 'Admin') {
        $result = mysqli_query($mysqli, "SELECT * FROM admin WHERE id=$user");
        $user_data = mysqli_fetch_array($result);
        $id = $user_data['id'];
    } elseif ($_SESSION['login'] == 'Mahasiswa') {
        $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE npm=$user");
        $user_data = mysqli_fetch_array($result);
        $npm = $user_data['npm'];
        # foto
    } elseif ($_SESSION['login'] == 'Dosen') {
        $result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE nip=$user");
        $user_data = mysqli_fetch_array($result);
        $nip = $user_data['nip'];
        # foto
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM perusahaan WHERE id=$user");
        $user_data = mysqli_fetch_array($result);
        $id = $user_data['id'];
        $fax = $user_data['fax'];

    }
      $nama = $user_data['nama'];
      $email = $user_data['email'];
      $pwd = $user_data['password'];
      $nohp = $user_data['nohp'];
       
?>
  <section id="team" class="team">
    <div class="container">
      <div class="row">
        <div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
          <h2>Edit Profile <?php echo $_SESSION["login"]; ?></h2>
          <div class="separetor"></div>
        </div>
        
        <div class="main_team_content text-center">
            <form method="POST" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-4"></div>
                                  <div class="col-sm-4">
                                    
                                  <?php
                                  if ($_SESSION["login"] == "Mahasiswa") {
                                    echo '<div class="form-group">
                                    <label for="npm">NPM :</label>
                                    <input type="number" class="form-control" name="npm" value="'.$npm.'" >
                                  </div>';
                                  } elseif ($_SESSION["login"] == "Dosen") {
                                    echo '<div class="form-group">
                                    <label for="nip">NIP :</label>
                                    <input type="number" class="form-control" name="nip" value="'.$nip.'">
                                  </div>';
                                  } elseif ($_SESSION["login"] == "Perusahaan") {
                                    echo '<div class="form-group">
                                    <label for="id">ID :</label>
                                    <input type="number" class="form-control" name="id" value="'.$id.'">
                                  </div>';
                                  }
                                  ?>
                                  <div class="form-group">
                                    <label for="nama">Name :</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="email">E-mail :</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="password" class="form-control" name="password" value="<?php echo $pwd; ?>" pattern="^[A-Za-z0-9]+">
                                  </div>

                                  <div class="form-group">
                                    <label for="hp">Phone Number :</label>
                                    <input type="number" class="form-control" name="nohp" value="<?php echo $nohp; ?>">
                                  </div>
                                  <?php 
                                  if ($_SESSION["login"] != "Perusahaan") {
                                    echo '<div class="form-group">
                                    <label for="foto">Foto :</label>
                                    <input type="file" class="form-control" name="foto" >
                                  </div>';
                                  } else {
                                    # code...
                                    echo '<div class="form-group">
                                    <label for="fax">Fax :</label>
                                    <input type="text" class="form-control" name="fax" value="'.$fax.'">
                                  </div>';
                                  } ?>

                                  </div>
                                  <div class="col-sm-4"></div>
                              </div>
                              <div class="row">
                              <button type="submit" class="btn btn-submit" name="update">Submit</button>
                              </div>
                            </form>
        </div>

      </div>
    </div>
  </section>

<?php include 'script.php';?>
</body>
</html>


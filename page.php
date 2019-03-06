<?php include 'config.php';  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sistem PKL Online</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style5.css">
    </head>
    <body>
        <?php include 'navbar2.php';  ?>
        
        <div class="main_team_content text-center">
            <form method="POST" enctype="multipart/form-data">
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
                    <label for="nip">NIP :</label>
                    <input type="number" class="form-control" name="nip">
                  </div>';
                  } elseif ($_SESSION["regis"] == "Perusahaan") {
                    echo '<div class="form-group">
                    <label for="id">ID :</label>
                    <input type="number" class="form-control" name="id">
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
                    <input type="password" class="form-control" name="password">
                  </div>

                  <div class="form-group">
                    <label for="hp">Phone Number :</label>
                    <input type="number" class="form-control" name="nohp">
                  </div>
                  <?php 
                  if ($_SESSION["regis"] != "Perusahaan") {
                    echo '<div class="form-group">
                    <label for="foto">Foto :</label>
                    <input type="file" class="form-control" name="foto" >
                  </div>';
                  } else {
                    # code...
                    echo '<div class="form-group">
                    <label for="fax">Fax :</label>
                    <input type="text" class="form-control" name="fax">
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


        <?php include 'navbar22.php';  ?>
    </body>
</html>

<?php

session_start(); 
$databaseHost = 'localhost';
$databaseName = 'pkl';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

  if(isset($_POST['login'])) {
       // $_SESSION['page'] = 'job';
       $user = mysqli_real_escape_string($mysqli,$_POST['name']);
       $password = mysqli_real_escape_string($mysqli,$_POST['password']); 
       $sql = "SELECT npm FROM mahasiswa WHERE npm = '$user' and pwd = '$mypassword'";
       $result = mysqli_query($mysqli,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       // $_SESSION['current_page'] = '';
       $count = mysqli_num_rows($result);
       //$_SESSION['job'] = '';	
       if($count == 1) {
          $_SESSION['login_user'] = $myusername;
          header("location: .php");
       }else {
        header("location: login.php");
       }
    }
 
  if(isset($_POST['regis']))
    {
      $_SESSION['regis'] = '';
      $_SESSION['regis'] = $_POST['regis']; 
      header("location: regis2.php");
      
    }

    if(isset($_POST['signup']))
    {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      $nohp = $_POST['nohp'];
      if ($_SESSION["regis"] == "Mahasiswa") 
      {
        $npm = $_POST['npm'];
        $foto = $_POST['foto'];
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(npm,password,nama,email,nohp,foto) VALUES('$npm','$pwd','$nama','$email','$nohp','$foto')");
        header("location: login.php");

      } elseif ($_SESSION["regis"] == "Dosen") 
      {
        $nip = $_POST['nip'];
        $foto = $_POST['foto'];
        $result = mysqli_query($mysqli, "INSERT INTO dosen(nip,password,nama,email,nohp,foto) VALUES('$nip','$pwd','$nama','$email','$nohp','$foto')");
        header("location: login.php");
      } elseif ($_SESSION["regis"] == "Perusahaan") 
      {
        $id = $_POST['id'];
        $fax = $_POST['fax'];
        $result = mysqli_query($mysqli, "INSERT INTO perusahaan(id,password,nama,email,notelp,fax) VALUES('$id','$pwd','$nama','$email','$nohp','$fax')");
        header("location: login.php");
      }
    }
?>
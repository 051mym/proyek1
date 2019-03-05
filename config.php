<?php

session_start(); 
$databaseHost = 'localhost';
$databaseName = 'pkl';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

  if(isset($_POST['login'])) {
    if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {

        header("Location: login.php");
    }else{
       $_SESSION['login'] = "";
       $user = mysqli_real_escape_string($mysqli,$_POST['username']);
       $password = mysqli_real_escape_string($mysqli,$_POST['password']);
       if(strlen($user) == 1 )
       {
         $sql = "SELECT * FROM admin WHERE id = '$user' and password = '$password'";
         $_SESSION['login'] = "Admin";
       } elseif (strlen($user) == 10) {
         $sql = "SELECT * FROM mahasiswa WHERE npm = '$user' and password = '$password'";
         $_SESSION['login'] = "Mahasiswa";
       } elseif (strlen($user) > 10 ) {
         $sql = "SELECT * FROM dosen WHERE nip = '$user' and password = '$password'";
         $_SESSION['login'] = "Dosen";
       } else {
         $sql = "SELECT * FROM perusahaan WHERE id = '$user' and password = '$password'";
         $_SESSION['login'] = "Perusahaan";
       }
       // $sql = "SELECT * FROM mahasiswa WHERE npm = '$user' and password = '$password'";
       $result = mysqli_query($mysqli,$sql);
        if($result) {
          header("Location: page.php");
          }else {
        header("Location: login.php");
       }
    

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
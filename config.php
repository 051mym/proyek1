<?php

session_start(); 
$databaseHost = 'localhost';
$databaseName = 'pkl';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$Err = "";

  if(isset($_POST['login'])) {
    if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {

        header("Location: login.php");
    }else{
       $_SESSION['login'] = "";
       $user = mysqli_real_escape_string($mysqli,$_POST['username']);
       $password = mysqli_real_escape_string($mysqli,$_POST['password']);
       $_SESSION['login_user'] = $user;
       if(strlen($user) == 1 )
       {
         $sql = "SELECT * FROM admin WHERE id = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             if($row['id'] == $user && $row['password'] == $password){
                  $_SESSION['login'] = "Admin";
                  header("Location: a_home.php");
             }else if ($row['id'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> ID dan Password salah. </div>';
             }
         
       } elseif (strlen($user) == 11) {
         $sql = "SELECT * FROM mahasiswa WHERE npm = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             if($row['npm'] == $user && $row['password'] == $password){
                    $_SESSION['login'] = "Mahasiswa";
                    header("Location: m_home.php");
             }else if ($row['npm'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> NPM dan Password salah. </div>';
             }

       } elseif (strlen($user) > 11 ) {
         $sql = "SELECT * FROM dosen WHERE nip = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             if($row['nip'] == $user && $row['password'] == $password){
                      $_SESSION['login'] = "Dosen";
                      header("Location: d_home.php");
             }else if ($row['nip'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> NIP dan Password salah. </div>';
             }

       } elseif (strlen($user) == 5 ) {
         $sql = "SELECT * FROM perusahaan WHERE id = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             if($row['id'] == $user && $row['password'] == $password){
                      $_SESSION['login'] = "Perusahaan";
                      header("Location: p_home.php");
             }else if ($row['id'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> ID dan Password salah. </div>';
             }

       } else {header("Location: login.php");}

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
      // $npm = $_POST['npm'];

      $image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    if ($_SESSION["regis"] == "Mahasiswa") 
      {
        $npm = $_POST['npm'];
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(npm,password,nama,email,nohp,foto) VALUES('$npm','$pwd','$nama','$email','$nohp','$image')");
        header("location: login.php");

      } else if ($_SESSION["regis"] == "Dosen") 
      {
        $nip = $_POST['nip'];
        $result = mysqli_query($mysqli, "INSERT INTO dosen(nip,password,nama,email,nohp,foto) VALUES('$nip','$pwd','$nama','$email','$nohp','$image')");
        header("location: login.php");
      } else if ($_SESSION["regis"] == "Perusahaan") 
      {
        $id = $_POST['id'];
        $fax = $_POST['fax'];
        $result = mysqli_query($mysqli, "INSERT INTO perusahaan(id,password,nama,email,nohp,fax) VALUES('$id','$pwd','$nama','$email','$nohp','$fax')");
        header("location: login.php");
      }
    }
  


if(isset($_POST['update']))
    {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      $nohp = $_POST['nohp'];
      // $npm = $_POST['npm'];

      $image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    if ($_SESSION['login'] == "Mahasiswa") 
      {
        $npm = $_POST['npm'];
        $result = mysqli_query($mysqli, "UPDATE mahasiswa SET password='$pwd',nama='$nama',email='$email',nohp='$nohp',foto='$image' WHERE npm='$npm'");
        header("location: profile.php");

      } else if ($_SESSION['login'] == "Dosen") 
      {
        $nip = $_POST['nip'];
        $result = mysqli_query($mysqli, "UPDATE dosen SET password='$pwd',nama='$nama',email='$email',nohp='$nohp',foto='$image' WHERE nip='$nip'");
        header("location: profile.php");
      } else if ($_SESSION['login'] == "Perusahaan") 
      {
        $id = $_POST['id'];
        $fax = $_POST['fax'];
        $result = mysqli_query($mysqli, "UPDATE perusahaan SET password='$pwd',nama='$nama',email='$email',nohp='$nohp',fax='$fax' WHERE id='$id'");
        header("location: profile.php");
      }
    }

?>
<?php
session_start(); 
$databaseHost = 'localhost';
$databaseName = 'pkl';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$Err = "";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
         $_SESSION['nama'] = $row['nama'];
             if($row['id'] == $user && $row['password'] == $password){
                  $_SESSION['login'] = "Admin";
                  header("Location: home.php");
             }else if ($row['id'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> ID dan Password salah. </div>';
             }
         
       } elseif (strlen($user) == 11) {
         $sql = "SELECT * FROM mahasiswa WHERE npm = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $_SESSION['nama'] = $row['nama'];
             if($row['npm'] == $user && $row['password'] == $password){
                    $_SESSION['login'] = "Mahasiswa";
                    header("Location: home.php");
             }else if ($row['npm'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> NPM dan Password salah. </div>';
             }

       } elseif (strlen($user) > 11 ) {
         $sql = "SELECT * FROM dosen WHERE nip = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $_SESSION['nama'] = $row['nama'];
             if($row['nip'] == $user && $row['password'] == $password){
                      $_SESSION['login'] = "Dosen";
                      header("Location: home.php");
             }else if ($row['nip'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> NIP dan Password salah. </div>';
             }

       } elseif (strlen($user) == 5 ) {
         $sql = "SELECT * FROM perusahaan WHERE id = '$user' and password = '$password'";
         $result = mysqli_query($mysqli,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $_SESSION['nama'] = $row['nama'];
             if($row['id'] == $user && $row['password'] == $password){
                      $_SESSION['login'] = "Perusahaan";
                      header("Location: home.php");
             }else if ($row['id'] != $user && $row['password'] != $password) {
                     $Err = '<div class="alert alert-danger"> ID dan Password salah. </div>';
             }

       } else {header("Location: login.php");}
    }   
  }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  if(isset($_POST['regis']))
    {
      $_SESSION['regis'] = '';
      $_SESSION['regis'] = $_POST['regis']; 
      header("location: regis2.php");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if(isset($_POST['signup']))
    {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      $nohp = $_POST['nohp'];


    if ($_SESSION["regis"] == "Mahasiswa") 
      {
        $npm = $_POST['npm'];
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(npm,password,nama,email,nohp) VALUES('$npm','$pwd','$nama','$email','$nohp')");

        $target_dir = "files/profile/mahasiswa/";
        $target_file = $target_dir.'profile-'.$npm.strrchr($_FILES["foto"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "jpg"){
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
          }
        header("location: login.php");

      } else if ($_SESSION["regis"] == "Dosen") 
      {
        $nip = $_POST['nip'];
        $result = mysqli_query($mysqli, "INSERT INTO dosen(nip,password,nama,email,nohp) VALUES('$nip','$pwd','$nama','$email','$nohp')");

        $target_dir = "files/profile/dosen/";
        $target_file = $target_dir.'profile-'.$nip.strrchr($_FILES["foto"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "jpg"){
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
          }
        header("location: login.php");

      } else if ($_SESSION["regis"] == "Perusahaan") 
      {
        $id = $_POST['id'];
        $fax = $_POST['fax'];
        $result = mysqli_query($mysqli, "INSERT INTO perusahaan(id,password,nama,email,nohp,fax) VALUES('$id','$pwd','$nama','$email','$nohp','$fax')");
        header("location: login.php");
      }
    }
  
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['update']))
    {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      $nohp = $_POST['nohp'];

      $image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    if ($_SESSION['login'] == "Mahasiswa") 
      {
        $npm = $_POST['npm'];
        $result = mysqli_query($mysqli, "UPDATE mahasiswa SET password='$pwd',nama='$nama',email='$email',nohp='$nohp' WHERE npm='$npm'");

        $target_dir = "files/profile/mahasiswa/";
        $target_file = $target_dir.'profile-'.$npm.strrchr($_FILES["foto"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "jpg"){
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
          }
        header("location: profile.php");

      } else if ($_SESSION['login'] == "Dosen") 
      {
        $nip = $_POST['nip'];
        $result = mysqli_query($mysqli, "UPDATE dosen SET password='$pwd',nama='$nama',email='$email',nohp='$nohp' WHERE nip='$nip'");

        $target_dir = "files/profile/dosen/";
        $target_file = $target_dir.'profile-'.$nip.strrchr($_FILES["foto"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "jpg"){
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
          }
        header("location: profile.php");

      } else if ($_SESSION['login'] == "Perusahaan") 
      {
        $id = $_POST['id'];
        $fax = $_POST['fax'];
        $result = mysqli_query($mysqli, "UPDATE perusahaan SET password='$pwd',nama='$nama',email='$email',nohp='$nohp',fax='$fax' WHERE id='$id'");
        header("location: profile.php");
      }
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if(isset($_POST['m_pengajuan']))
    {
      $npm=$_SESSION['login_user'];

        $target_dir = "files/berkas/berkasuniv/";
        $target_file = $target_dir.'berkasuniv-'.$npm.strrchr($_FILES["berkasuniv"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "pdf"){
            move_uploaded_file($_FILES["berkasuniv"]["tmp_name"], $target_file);
          }

          
        $target_dir = "files/berkas/berkasproposal/";
        $target_file = $target_dir.'berkasproposal-'.$npm.strrchr($_FILES["berkasproposal"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "pdf"){
            move_uploaded_file($_FILES["berkasproposal"]["tmp_name"], $target_file);
          }
        
        $perusahaan = $_POST['perusahaan'];
        $dosen = $_POST['dosen'];
        $sql = "SELECT p.nama as pnama, d.nama as dnama  FROM dosen as d, perusahaan as p WHERE p.id = '$perusahaan' AND d.nip='$dosen'";
        $result = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $dnama = $row['dnama'];
        $pnama = $row['pnama'];
        $user = $_SESSION['login_user'];
        $result = mysqli_query($mysqli, "INSERT INTO pengajuanpkl (npm,perusahaan,dosen,status,tglpengajuan,pnama,dnama) VALUES ('$user','$perusahaan','$dosen','1',now(), '$pnama', '$dnama')");
        header("location: m_status.php");

    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if(isset($_POST['accept']))
    { 
      $id = $_POST['id'];
      $user=$_SESSION['login_user'];
      
      if ($_SESSION["login"] == "Admin"){
          $nama=$_SESSION["nama"];
          $result = mysqli_query($mysqli, "UPDATE pengajuanpkl SET anama='$nama',admin='$user',status='2',tglaccadmin=now() WHERE id='$id'");
          header("Location: a_verifikasi.php");
      }else
      if ($_SESSION["login"] == "Dosen"){
          $result = mysqli_query($mysqli, "UPDATE pengajuanpkl SET status='3',tglaccdosen=now() WHERE id='$id'");
          header("Location: d_verifikasi.php");
      }else
      if ($_SESSION["login"] == "Perusahaan"){
          $result = mysqli_query($mysqli, "UPDATE pengajuanpkl SET status='4',tglaccperusahaan=now() WHERE id='$id'");
          header("Location: p_verifikasi.php");
      }
    }

  if(isset($_POST['deceline']))
    {
      $id = $_POST['id'];
      $user=$_SESSION['login_user'];
      if ($_SESSION["login"] == "Admin"){
          $result = mysqli_query($mysqli, "UPDATE pengajuanpkl SET admin='$user',status='0',tglaccadmin=now() WHERE id='$id'");
          header("Location: a_verifikasi.php");
      }else
      if ($_SESSION["login"] == "Dosen"){
          $result = mysqli_query($mysqli, "UPDATE pengajuanpkl SET status='0',tglaccdosen=now() WHERE id='$id'");
          header("Location: d_verifikasi.php");
      }else
      if ($_SESSION["login"] == "Perusahaan"){
          $result = mysqli_query($mysqli, "UPDATE pengajuanpkl SET status='0',tglaccdosen=now() WHERE id='$id'");
          header("Location: p_verifikasi.php");
      }
    }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(isset($_POST['p_persetujuan']))
    {
        $user=$_SESSION['login_user'];
        $target_dir = "files/berkas/berkasperusahaan/";
        $target_file = $target_dir.'berkasperusahaan-'.$user.strrchr($_FILES["berkasperusahaan"]["name"],'.');
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType == "pdf"){
            move_uploaded_file($_FILES["berkasperusahaan"]["tmp_name"], $target_file);
          }
        header("Location: p_persetujuan.php");
    }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>
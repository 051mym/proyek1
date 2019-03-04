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
        header("location: Login.php");
       }
    }
 
  if(isset($_POST['regis']))
    {
      $_SESSION['regis'] = '';
      $_SESSION['regis'] = $_POST['regis']; 
      header("location: regis2.php");
    }
?>
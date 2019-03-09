<?php
session_start();
if(session_destroy()) {
		session_start();
		$_SESSION['login'] = '';
      header("Location: index.php");
   }
?>
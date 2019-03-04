<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
		{
			if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		echo "<script>alert('Incorrect verification code');</script>" ;
	} 
     	else {
		$name=$_POST['name'];
			$email=$_POST['email'];
		$ad="insert into user(name,email) values(?,?)";
        $stmt= $mysqli->prepare($ad);
        $stmt->bind_param(ss,$name,$email);
          $stmt->execute();
          $stmt->close();	   
          echo "<script>alert('Data added Successfully');</script>" ;

		    }	
		}
		    ?>
<html>
<title>Captcha Image Verification
</title>
<body>
<h2>Captcha Image Verification
</h2>
<form name="stmt" method="post">
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="name" required="required" /> </td>
</tr>
<tr>
<td>Email :</td>
<td><input type="email" name="email" required="required" /></td>
</tr>
<tr>
<td>Verification code :</td>
<td><input type="text" name="vercode" size="10" required="required" />&nbsp;<img src="captcha.php" style="margin-top: 1%"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>
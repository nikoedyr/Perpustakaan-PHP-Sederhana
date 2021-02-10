<!DOCTYPE html>
<html>
  <head>
    <title>Perpustakaan</title>
  </head>
  <body>
  	<h2>LOGIN</h2>
	<form method="post">
		Username : <input name="username" type="text" placeholder="Username" required> <br>
		Password : <input name="password" type="password" placeholder="Password" required> <br>
		<input type="submit" name="login" value="Login">
	</form>                
  </body>
</html>

<?php
	if (isset($_POST['login'])) {
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if($password='admin' && $password='12345'){
			header("location:home.php");
		}else{
			echo "<script language=\"JavaScript\">alert(\"Login Gagal !\");</script>";
			echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=index.php\">");
		}

 	}
?>
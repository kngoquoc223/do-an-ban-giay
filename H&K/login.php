<?php
if (!isset($_SESSION)) session_start();
 if (isset($_SESSION['login']))
{
	header('location:manager.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
fieldset{width:20%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
</head>
<body>
	<fieldset>
	<legend style="margin:0 auto">Đăng nhập admin</legend>
	<form action="loginData.php" method="post" align="center">
		User<input type="text" name="id"><br>
		Pass<input type="password" 
		name="pass"><br>
		<input type="submit" name="sm" value="Login" >&emsp;</input><a href="signup.php">Đăng kí</a>
	</form>
</fieldset>
	
</body>
</html>
<?php 

include "./config.php"; 
    function getIndex($index, $value="")
            {
                if (!isset($_GET[$index]))  return $value;
                return trim($_GET[$index]);
            }
            $id     = getIndex("id");
            $pass      = getIndex("pass");
            $name        = getIndex("name");
            $sm         = getIndex("submit");
//          print_r($_GET);
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
</head>

<body>
<fieldset>
<legend style="margin:0 auto">Thông tin User</legend>
<form action="signup.php" method="get" enctype="multipart/form-data">
<table  align="center">
    <tr><td>User:</td><td><input type="text" name="id" 	></td></tr>
    <tr><td>pass:</td><td><input type="text" name="pass"  /></td></tr>
     <tr><td>Tên:</td><td><input type="text" name="name"  /></td></tr>
			 <tr><td colspan="2" align="center"><input type="submit" value="Đăng kí" name="submit"></td></tr> 

     
</table>
</form>
</fieldset>
<?php 
	if ($sm !="")
{       
        $pass=md5($pass);
		$sql= "INSERT INTO thanhvien(id_tv, password, name) VALUES ('$id', '$pass', '$name')";
        echo "$id $pass $name ";
		$obj->query($sql);
        header('location:login.php');

	}
?>
</body>
</html>

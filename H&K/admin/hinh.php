<?php
include "../config.php";
			//echo ROOT; exit;
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}
$sm = postIndex("submit");
$id = $_GET['id'];
print_r($_FILES);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add - hinh</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
</head>

<body>
	<?php 
	$filehinh='';
	$error="";
	if(isset($_FILES['file']))
	{
		
		$tim="/jpg/";
		if(preg_match($tim,$_FILES['file']['name']))
		{
			if($_FILES['file']['error']==0)
			{
				$name = $_FILES['file']['name'];
				$filehinh =IMG . $_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'],$filehinh);
			}
		}else
		$error="hình không hợp lệ!";
	}
	?>
<fieldset>
<legend style="margin:0 auto">Thông tin </legend>
<form action="hinh.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Chọn 1 file</td><td><input type="file" name="file" />
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?php
if ($filehinh !='')
{	
	$namehinh=$_FILES['file']['name'];
	?>

    <div class="info">
    <a href="add.php">Tiếp tục</a><br>
   	Hình vừa chọn cho sản phẩm là:<br>
			<img src="../images/<?php echo $name ; ?>" width=200 >
    </div>
    <?php

$sql= "UPDATE giay SET img = '$namehinh' WHERE giay.Ma_Giay = '$id'";
		$obj->query($sql);
}
if($error!="")
{
?>
 <div class="info">
   <?php echo $error ?><br>
    </div>
    <?php
}?>
</body>
</html>

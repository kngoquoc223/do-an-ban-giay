<?php
			include "../config.php";
			$data = $obj->query("select * from giay");	
			$giay = $data ->fetchAll();	 
			$n = $data->rowCount();
 		?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XEM_SP</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
 <a href="../index.php">Thoát</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../manager.php">Trở lại</a><br><br>
</head>

<body>
<div class="info">
	<?php

echo "Co $n Sản phẩm";?><br><?php 
foreach ($giay as $key => $value) {
	?>

	<?php echo $value['Ma_Giay'] ;?> - 
	<?php echo $value['Ten_Giay'] ;?>
	<a href="Xoa.php?m=<?php echo $value['Ma_Giay'] ?>">Xóa</a>
	<a href="Sua.php?m=<?php echo $value['Ma_Giay'] ?>">Sửa</a>
<br>
	<?php
} ?>
</div>

</body>
</html>

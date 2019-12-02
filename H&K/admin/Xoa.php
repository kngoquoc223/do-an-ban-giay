<?php
$o = new PDO("mysql:host=localhost;dbname=bangiay","root","");
$ma = isset($_GET['m'])?$_GET['m']:'';

/*$sql="delete from nhaxb where manxb='$ma' ";
$stm = $o->query($sql);//buoc 3*/
$sql="delete from giay where Ma_Giay= ? ";
$stm = $o->prepare($sql);
$stm->execute(array($ma));
$n = $stm->rowCount();
echo "Đã xóa $n Sản phẩm";
?>
<hr>
<a href="Xem.php">Tiếp tục</a>
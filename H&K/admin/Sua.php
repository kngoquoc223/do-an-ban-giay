<?php

			$obj = new PDO("mysql:host=localhost;dbname=bangiay","root","");
			$obj ->query("set names 'utf8'");

			$data = $obj->query("select * from nsx");
			$nhasanxuat = $data ->fetchAll();	
			$data2 = $obj->query("select * from loai");
			$loai = $data2 ->fetchAll();

			$ma = isset($_GET['m'])?$_GET['m']:'';
			$sql="select * from giay where Ma_Giay = ? ";
			$stm = $obj->prepare($sql);
			$stm->execute(array($ma));
			$giay = $stm ->fetch(PDO::FETCH_ASSOC);

			$ten_sp 	= $giay['Ten_Giay'];
			$ma_sp		= $giay['Ma_Giay'];
			$gia		= $giay['Gia'];
			$soluong	= $giay['Ton_kho'];
			$nsx 		= $giay['ID_NhaSanXuat'];
			$loaisp 	= $giay['Ma_Loai'];
			$hot 		= $giay['Hot'];
			$check='';
			if($hot!=0)
				$check="checked";
			print_r($giay);
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sua</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
</head>

<body>

	
<fieldset>
<legend style="margin:0 auto">Thông tin sản phẩm</legend>
<form action="update.php?m=<?php echo $ma ?>" method="post" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Tên sản phẩm:</td><td><input type="text" name="ten_sp"  value="<?php echo $ten_sp;?>"
    					></td></tr>
    <tr><td>Mã sản phẩm:</td><td><input type="text" name="ma_sp"  value="<?php echo $ma_sp;?>" disabled /></td></tr>
     <tr><td>Giá:</td><td><input type="text" name="gia" value="<?php echo $gia;?>" /></td></tr>
    <tr><td>Số lượng:</td><td><input type="text" name="soluong" value="<?php echo $soluong;?>"  /></td></tr>
    <tr><td>Nhà sản xuất:</td><td><select name="nsx" >
    	
    				<?php foreach($nhasanxuat as $n)
    				{  
    					$sl="";
    					if($nsx==$n['ID_NhaSanXuat'])
    						$sl="selected"?>
    					?><option value="<?php echo $n['ID_NhaSanXuat']; ?>"  <?php echo $sl; ?> ><?php echo $n['Ten_NSX']; ?></option>

					<?php 
					} ?>
							</select></tr></td>
	 <tr><td>Loại giày:</td><td><select name="loai">
    	
    				<?php foreach($loai as $n)
    				{ 
    					$sl="";
    					if($loaisp==$n['Ma_Loai'])
    						$sl="selected"?>
							  <option value="<?php echo $n['Ma_Loai']; ?>" <?php echo $sl; ?> ><?php echo $n['Ten_Loai']; ?></option>


					<?php 
					} ?>
							</select></tr></td>
							 <tr><td>Sản phẩm đang HOT?:</td><td><input type="checkbox" name="hot"  value="1" <?php echo $check;?>
    					></td></tr>
							
    						 <tr><td colspan="2" align="center"><input type="submit" value="Sửas" name="submit"></td></tr> 
    					
     
</table>
</form>
</fieldset>

</body>
</html>

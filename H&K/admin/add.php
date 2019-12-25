<?php

			 include "../config.php";
			$data = $obj->query("select * from nsx");
			$nhasanxuat = $data ->fetchAll();	
			$data2 = $obj->query("select * from loai");
			$loai = $data2 ->fetchAll();
			$checkdt = $obj->query("select * from giay");	
			$kiemtra = $checkdt ->fetchAll();

			function getIndex($index, $value="")
			{
				if (!isset($_GET[$index]))	return $value;
				return trim($_GET[$index]);
			}
			$ten_sp 	= getIndex("ten_sp");
			$ma_sp		= getIndex("ma_sp");
			$gia		= getIndex("gia");
			$soluong	= getIndex("soluong");
			$nsx 		= getIndex("nsx");
			$loaisp 	= getIndex("loai");
			$sm 		= getIndex("submit");
			$hot 		= getIndex("hot",0);
			$os= "Kiểm tra";
			$check='';
			if($hot!=0)
				$check="checked";
//			print_r($_GET);
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
 <a href="../index.php">Thoát</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../manager.php">Trở lại</a><br><br>
</head>

<body>

	<?php

if ($sm !="")
{	
	$err ="";
	$tim='.';
	$kq="";
	$kq=strpos($soluong,$tim);
	if($kq!="")	$err .="Số lượng phải là số nguyên dương<br>";
	// if(preg_match($tim,$soluong)) $err .="Số lượng phải là số nguyên dương<br>";
	//if(!is_int($soluong))	$err .="Số lượng phải là số nguyên dương<br>";
	if($gia <=0 ||$soluong <=0)			$err .="Không được nhập số âm!!<br>";
	if (strlen($ten_sp)<2 ) 		$err .="Tên sản phẩm phải có ít nhất 2 kí tự<br>";
	if (is_numeric($gia)==FALSE) 		$err .="Giá phải là số. <br>";
	if(strlen($ma_sp)<1&&strlen($ma_sp)>=15) 			$err .="Mã sản phẩm không hợp lệ.<br>";
	if(is_numeric($soluong)==FALSE) 	$err .="Số lượng không hợp lệ.<br>";
	foreach ($kiemtra as $k => $v) {
		if($ma_sp==$v['Ma_Giay'])
			$err .="Mã sản phẩm bị trùng!!!!!<br>";
	}
	
	?>
    <div class="info" >
    	<?php 
			if ($err !="") echo $err;
			else
			  {
				echo "Các thông tin đều hợp lệ!!! <br>";
				echo "Ấn tiếp tục để chọn hình cho sản phẩm.<br>";  
				$os="Thêm";
				  
			}
				
		?>
    </div>
    <?php

}
?>
<fieldset>
<legend style="margin:0 auto">Thông tin sản phẩm</legend>
<form action="add.php" method="get" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Tên sản phẩm:</td><td><input type="text" name="ten_sp"  value="<?php echo $ten_sp;?>"
    					></td></tr>
    <tr><td>Mã sản phẩm:</td><td><input type="text" name="ma_sp"  value="<?php echo $ma_sp;?>" /></td></tr>
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
							<?php if($os=="Kiểm tra")
							{?>
    						 <tr><td colspan="2" align="center"><input type="submit" value="Kiểm tra" name="submit"></td></tr> 
    						<?php }?>
    						<?php if($os=="Thêm") 
    						{ ?>
    							<tr><td colspan="2" align="center"><a href="hinh.php?id=<?php echo $ma_sp; ?>">Tiếp Tục</a>
    						<?php }?>

     
</table>
</form>
</fieldset>
<?php 
	if($os=="Thêm")
	{
		$hot		= (int)$hot;
		$gia		= (float)$gia;
		$soluong	= (int)$soluong;
		$sql= "INSERT INTO giay(Ma_Giay, Ten_Giay, Gia, img, ID_NhaSanXuat, Ma_Loai, Ton_kho, Hot) VALUES ('$ma_sp', '$ten_sp', $gia,'' ,'$nsx' ,'$loaisp' ,$soluong, $hot)";
        //echo "$ten_sp $ma_sp $gia $soluong $nsx $loaisp $hot ";

		$obj->query($sql);

	}
?>
</body>
</html>

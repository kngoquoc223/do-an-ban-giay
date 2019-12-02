<?php
$obj = new PDO("mysql:host=localhost;dbname=bangiay","root","");
$obj ->query("set names 'utf8'");
			$ten_sp 	= isset($_POST['ten_sp'])?$_POST['ten_sp']:'';
			$ma_sp		= isset($_GET['m'])?$_GET['m']:'';
			$gia		= isset($_POST['gia'])?$_POST['gia']:'';
			$soluong	= isset($_POST['soluong'])?$_POST['soluong']:'';
			$nsx 		= isset($_POST['nsx'])?$_POST['nsx']:'';
			$loaisp 	= isset($_POST['loai'])?$_POST['loai']:'';
			$hot 		= isset($_POST['hot'])?$_POST['hot']:'';

		$hot		= (int)$hot;
		$gia		= (float)$gia;
		$soluong	= (int)$soluong;
    echo "$ten_sp $ma_sp $gia $soluong $nsx $loaisp $hot ";

$sql=" UPDATE giay SET Ten_Giay = '$ten_sp', Gia = $gia, ID_NhaSanXuat = '$nsx' , Ma_Loai = '$loaisp', Ton_kho =$soluong, Hot = $hot WHERE Ma_Giay = '$ma_sp' ";
$obj->query($sql);
//$sql="update giay SET Ten_Giay = ?, Gia = ?, ID_NhaSanXuat = ? , Ma_Loai = ?, Ton_kho = ?, Hot = ? WHERE Ma_Giay = ? ";
//$arr = array( $ten_sp ,$gia , $nsx ,$loaisp ,$soluong ,$hot ,$ma_sp);
//$stm = $obj->prepare($sql);
//$stm->execute($arr);

header("location:Xem.php");
<?php
include "./config.php"; 
	function getIndex($index, $value='')
			{
				if (!isset($_GET[$index]))	return $value;
				return trim($_GET[$index]);
			}
			$ma		= getIndex('ma');
			//if ($ma=='') header('location:index.php');
			$size		= getIndex('size');
			$key		= getIndex('key');
			$soluong	= getIndex("sl",1);
			if($soluong<0) $soluong =0;
			$ac = getIndex("ac",'add');
			$sanpham = array('ma' => $ma ,
							 'size' => $size ,
							 'soluong' => $soluong ,
							);

//if ($sl<=0) $ac='delete';
if (!isset($_SESSION)) session_start();
$gh = isset($_SESSION['gh'])?$_SESSION['gh']:array();

if ($ac=='add')
{
	$gh[]=$sanpham;
}
if ($ac=='delete')
{
	unset($gh[$key]);
	//header('location:checkout.php'); exit;
}
if ($ac=='update')
{
	if (isset($gh[$id])) $gh[$id]= $sl;
}
if ($ac=='deleteALL')
{
	session_destroy();
}
$_SESSION['gh']= $gh;
//print_r($_SESSION['gh']);
header('location:checkout.php');
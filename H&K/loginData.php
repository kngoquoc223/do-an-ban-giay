<?php
 include "./config.php";
if (!isset($_SESSION)) session_start();
$user = isset($_POST['id'])?trim($_POST['id']):'';
$pass = isset($_POST['pass'])? $_POST['pass']:'';
$sql="select * from thanhvien where id_tv=? and password=?";
$arr = array($user, md5($pass));
$stm = $obj->prepare($sql);
$stm->execute($arr);
$n = $stm->rowCount();

if ($n==0) // sai
{	header('location:login.php'); exit;
}

$_SESSION['login'] = $stm->fetch(PDO::FETCH_ASSOC);
header('location:manager.php');
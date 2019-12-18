<?php 
define("ROOT",dirname(__FILE__));
define("IMG",dirname(__FILE__)."/images/");
$obj = new PDO("mysql:host=localhost;dbname=bangiay","root","");
			$obj ->query("set names 'utf8'");
?>
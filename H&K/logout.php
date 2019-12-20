<?php
if (!isset($_SESSION)) session_start();
 unset($_SESSION['login']);
 header('location:index.php');
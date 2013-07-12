<?php
//logout.php
session_start();
if(isset($_SESSION['login']))
	unset($_SESSION['login']);

session_destroy();
//unset($_SESSION);
//setcookie("hash", "", time() - 3600);
header("location: /tugasakhir/index.php");
?>

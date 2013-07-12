<?php

	session_start();		
	// Create connection
	include 'db_config.php';
	
	$mat = $_POST['newmatkul'];
	$cre = $_SESSION['user_id'];

	$sql = "INSERT INTO matkul (matkul_nama,matkul_creator) values('$mat',$cre)";

	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	
	header('location:/tugasakhir/dsn/enroll');
?>

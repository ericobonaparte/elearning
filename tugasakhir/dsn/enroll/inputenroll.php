<?php

			
	// Create connection
	include 'script/db_config.php';
	
	$mat = $_POST['matkul'];
	$mhs = $_POST['mahasiswa'];

	$sql = "INSERT INTO role_matkul (user_id,matkul_id) values($mhs,$mat)";

	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	
	header('location:index.php');
?>

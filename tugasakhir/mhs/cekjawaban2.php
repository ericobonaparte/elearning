<?php
	session_start();
	include 'script/db_config.php';
	$c = $_POST['pilih'] ;
	$z = $_SESSION['quiz'];
	$x = $_SESSION['user_id'];

	$sql = "INSERT INTO jawaban_user (soal_id,id_user,jawaban) values(".$z.",".$x.",'".$c."')";
	$hasil = mysql_query($sql);
	
	
	header('location:index.php');

?>

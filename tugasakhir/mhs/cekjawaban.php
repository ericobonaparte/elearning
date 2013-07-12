<?php
	session_start();
	include 'script/db_config.php';
	$c = $_POST['pilih'] ;
	$z = $_SESSION['quiz'];
	$x = $_SESSION['user_id'];

	$sql="select jawaban_id from jawaban where pertanyaan_id=".$z." and jawaban_benar_status=1";	
	$hasil = mysql_query($sql);
	$row = mysql_fetch_assoc($hasil);
	$e = $row['jawaban_id'];
	echo $row['jawaban_id'];


	if ($c==""){ 
		$sql = "INSERT INTO jawaban_user (soal_id,id_user,jawaban) values(".$z.",".$x.",'KOSONG')";
		$hasil = mysql_query($sql);
	}
	else if ($c==$e){
		$sql = "INSERT INTO jawaban_user (soal_id,id_user,jawaban) values(".$z.",".$x.",'BENAR')";
		$hasil = mysql_query($sql);
	}
	else if ($c!=$e){
		$sql = "INSERT INTO jawaban_user (soal_id,id_user,jawaban) values(".$z.",".$x.",'SALAH')";
		$hasil = mysql_query($sql);
	}
	
	header('location:index.php');

?>

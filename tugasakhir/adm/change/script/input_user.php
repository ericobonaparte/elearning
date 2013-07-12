<?php
session_start();

//error handling
	 	 require_once __DIR__ . '/db_config.php';
		
					
					
					$password = $_POST['password'];
					$password_new = md5($_POST['password_new']);
					mysql_query ("UPDATE user SET password='$password_new' WHERE nama_user='$_SESSION['login'] && password='$password'");
	
	/*$no_id = $_POST['no_id'];
	$jenis_id = $_POST['j_id'];
	
	mysql_query ("INSERT INTO pemilik_kendaraan (id_pengguna_kendaraan, jenis_id_pengguna)
		VALUES('$no_id', '$jenis_id');");*/
	
	echo ("Pengisian Data Anggota Baru Sukses");
	header ("Location:/tugasakhir/adm/");

?>

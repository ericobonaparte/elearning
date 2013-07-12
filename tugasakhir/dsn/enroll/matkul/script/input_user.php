<?php

//error handling
	 	 require_once __DIR__ . '/db_config.php';
		
					
					
					$j_id = $_POST['j_id'];
					$username = $_POST['username'];
					$password = md5($_POST['password']);

					mysql_query ("INSERT INTO user (status, nama_user, password)
						VALUES ('$j_id', '$username', '$password' );");
	
	/*$no_id = $_POST['no_id'];
	$jenis_id = $_POST['j_id'];
	
	mysql_query ("INSERT INTO pemilik_kendaraan (id_pengguna_kendaraan, jenis_id_pengguna)
		VALUES('$no_id', '$jenis_id');");*/
	
	echo ("Pengisian Data Anggota Baru Sukses");
	header ("Location:/tugasakhir/adm/");

?>

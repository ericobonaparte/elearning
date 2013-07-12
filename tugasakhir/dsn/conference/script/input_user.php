<?php

//error handling
	 	 require_once __DIR__ . '/db_config.php';
		
					
					
					$newmatkul = $_POST['newmatkul'];


					mysql_query ("INSERT INTO matkul (matkul_nama)
						VALUES ('$newmatkul' );");
	
	/*$no_id = $_POST['no_id'];
	$jenis_id = $_POST['j_id'];
	
	mysql_query ("INSERT INTO pemilik_kendaraan (id_pengguna_kendaraan, jenis_id_pengguna)
		VALUES('$no_id', '$jenis_id');");*/
	
	echo ("Pengisian Data Anggota Baru Sukses");
	header ("Location:/tugasakhir/dsn/matkul/");

?>

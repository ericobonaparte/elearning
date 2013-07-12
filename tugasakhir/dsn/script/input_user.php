<?php

//error handling
	 	 require_once __DIR__ . '/db_config.php';
		
					$no_id = $_POST['matkul_nama'];

					mysql_query ("INSERT INTO matkul (id_pengguna_kendaraan, jenis_id_pengguna, nama_pengguna,
							tempat_lahir,tanggal_lahir, jenis_kelamin, agama, alamat_id_pengguna, kota, propinsi,
							negara, kode_pos, alamat_pengguna, no_telepon, no_handphone, email,foto_pengguna)
						VALUES ('$no_id', '$jenis_id', '$nama', '$lahir', '$tgl', '$jk', '$agm',
							'$alamat', '$kota', '$prop', '$neg', '$kod',
							'$dom', '$tel', '$hp', '$email','$photo');");
	
	/*$no_id = $_POST['no_id'];
	$jenis_id = $_POST['j_id'];
	
	mysql_query ("INSERT INTO pemilik_kendaraan (id_pengguna_kendaraan, jenis_id_pengguna)
		VALUES('$no_id', '$jenis_id');");*/
	
	echo ("Penambahan Mata Kuliah Baru Sukses");
	header ("Location:/tugasakhir/dsn/matkul");

?>

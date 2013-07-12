<?php

//error handling
	 	 require_once __DIR__ . '/db_config.php';
		
					$no_id = $_POST['no_id'];
					$jenis_id = $_POST['j_id'];
					$nama = $_POST['namalengkap'];
					$lahir = $_POST['t_lahir'];
					$date = $_POST['tgl_lahir'];
					$tgl = date('Y-m-d', strtotime($date));
					$jk = $_POST['jk'];
					$agm = $_POST['agama'];
					$alamat = $_POST['alamat'];
					$kota = $_POST['kota'];
					$prop = $_POST['propinsi'];
					$neg = $_POST['negara'];
					$kod = $_POST['kodepos'];
					$dom = $_POST['alamatsby'];
					$tel = $_POST['phone'];
					$hp = $_POST['hphone'];
					$email = $_POST['email'];
					$photo = base64_encode($_POST['photo']);

					mysql_query ("INSERT INTO pemilik_kendaraan (id_pengguna_kendaraan, jenis_id_pengguna, nama_pengguna,
							tempat_lahir,tanggal_lahir, jenis_kelamin, agama, alamat_id_pengguna, kota, propinsi,
							negara, kode_pos, alamat_pengguna, no_telepon, no_handphone, email,foto_pengguna)
						VALUES ('$no_id', '$jenis_id', '$nama', '$lahir', '$tgl', '$jk', '$agm',
							'$alamat', '$kota', '$prop', '$neg', '$kod',
							'$dom', '$tel', '$hp', '$email','$photo');");
	
	/*$no_id = $_POST['no_id'];
	$jenis_id = $_POST['j_id'];
	
	mysql_query ("INSERT INTO pemilik_kendaraan (id_pengguna_kendaraan, jenis_id_pengguna)
		VALUES('$no_id', '$jenis_id');");*/
	
	echo ("Pengisian Data Anggota Baru Sukses");
	header ("Location:/tugasakhir/mhs/");

?>

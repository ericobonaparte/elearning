<?php
 include "script/db_config.php";
 
 $id = $_GET['nama_user'];
 $sql = "DELETE FROM user WHERE nama_user='$r'";
 $result = mysql_query($sql);
 
 if ($result){
     echo "Sukses menghapus data <br />
           <a href=\"index.php\">Lihat Tabel User</a>";
 } else {
     echo "Terjadi kesalahan";
 }
?>

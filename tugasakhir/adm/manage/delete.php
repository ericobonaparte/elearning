<?php
 include "script/db_config.php";
 
 $id = $_GET['id'];
 $sql = "DELETE FROM user WHERE nama_user='$id'";
 $result = mysql_query($sql);
 

 if ($result){
     echo "Sukses menghapus data <br />
           <a href=\"index.php\">Lihat Tabel User</a>";
 } else {
     echo "Terjadi kesalahan";
 }
?>

<?php
 include "script/db_config.php";
 
 $id = $_POST['id_user'];
 $name = $_POST['username'];
 $stat = $_POST['status'];
 $pass = md5($_POST['password']);
 $sql = "UPDATE user SET nama_user='$name', status='$stat', password='$pass' WHERE user_id='$id'";
 $result = mysql_query($sql);
 

 if ($result){
     echo "Sukses menghapus data <br />
           <a href=\"index.php\">Lihat Tabel User</a>";
 } else {
     echo "Terjadi kesalahan";
 }
?>

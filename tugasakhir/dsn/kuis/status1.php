<?php
 include "script/db_config.php";

 //ubah status
 $a = $_GET['id'] ;
 $sql = "UPDATE pertanyaan SET status_aktif=1 WHERE quiz_id='$a'";
 $result = mysql_query($sql);
 
 header('Location: index.php');
?>

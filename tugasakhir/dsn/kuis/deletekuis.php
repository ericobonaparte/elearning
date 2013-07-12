<?php
 include "script/db_config.php";
  

 $id = $_GET['id'];
 //delete dari tabel jawaban
 $sql = "DELETE FROM jawaban where (SELECT t.pertanyaan_id FROM pertanyaan as t WHERE t.quiz_id='$id' and jawaban.pertanyaan_id = t.pertanyaan_id)"; 
 $result = mysql_query($sql);

 //delete dari tabel pertanyaan
 $sql = "DELETE FROM pertanyaan WHERE quiz_id='$id'";
 $result = mysql_query($sql);

 //delete dari tabel quiz
 $sql = "DELETE FROM quiz WHERE id_quiz='$id'";
 $result = mysql_query($sql);


 if ($result){
     echo "Sukses menghapus data <br />
           <a href=\"index.php\">Kembali ke Daftar Kuis</a>";
 } else {
     echo "Terjadi kesalahan";
 }
?>

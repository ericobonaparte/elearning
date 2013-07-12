<?php

	session_start();		
	// Create connection
	include 'script/db_config.php';
	
	$que = $_POST['kuis'];
	$cre = $_POST['matkul_id'];

	$sql = "INSERT INTO quiz (nama_quiz, matkul_id) values('$que',$cre)";

	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);

	$sql = "SELECT MAX(id_quiz) FROM quiz";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	
	$text = $_POST['comments'];
	$last = $row['MAX(id_quiz)'];
	$sql = "INSERT INTO pertanyaan (pertanyaan_text, quiz_id, status_aktif) values('$text',$last, 0)";
	$result = mysql_query($sql);	

	header("location:/tugasakhir/dsn/kuis/");
?>

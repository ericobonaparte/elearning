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

	$sql = "SELECT MAX(pertanyaan_id) FROM pertanyaan";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$pertanyaan = $row['MAX(pertanyaan_id)'];

	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	
	$correct = $_POST['correct'];
	if ($correct == 1) {
		$statusa = 1;
		}
	else $statusa = 0;
	
	$correct = $_POST['correct'];
	if ($correct == 2) {
		$statusb = 1;
		}
	else $statusb = 0;

	$correct = $_POST['correct'];
	if ($correct == 3) {
		$statusc = 1;
		}
	else $statusc = 0;

	$correct = $_POST['correct'];
	if ($correct == 4) {
		$statusd = 1;
		}
	else $statusd = 0;
	
		

	$sql = "INSERT INTO jawaban (jawaban_text, jawaban_benar_status, pertanyaan_id) values('$a',$statusa,$pertanyaan)";
	$result = mysql_query($sql);

	$sql = "INSERT INTO jawaban (jawaban_text, jawaban_benar_status, pertanyaan_id) values('$b',$statusb,$pertanyaan)";
	$result = mysql_query($sql);

	$sql = "INSERT INTO jawaban (jawaban_text, jawaban_benar_status, pertanyaan_id) values('$c',$statusc,$pertanyaan)";
	$result = mysql_query($sql);

	$sql = "INSERT INTO jawaban (jawaban_text, jawaban_benar_status, pertanyaan_id) values('$d',$statusd,$pertanyaan)";
	$result = mysql_query($sql);

	header("location:/tugasakhir/dsn/kuis/");
?>

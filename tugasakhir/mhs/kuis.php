<?php
session_start();
include "script/db_config.php";

if (!isset($_SESSION['login'])){
	header('location: /tugasakhir/');
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>E-Learning System ITS</title>
        <script src="js/jquery.js"></script>
        <script src="js/modernizer.js"></script>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        
        <script>
  			$(document).ready(function() {
   				 	setInterval(function() {
        			 $('#jam').load('/tugasakhir/script/jam.php?acak='+ Math.random());
    				}, 1000);
  				});
		</script>
        
        <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
		<script type="text/javascript">
			$(function() {
				
				var $container	= $('#ib-container'),
					$articles	= $container.children('article'),
					timeout;
				
				$articles.on( 'mouseenter', function( event ) {
						
					var $article	= $(this);
					clearTimeout( timeout );
					timeout = setTimeout( function() {
						
						if( $article.hasClass('active') ) return false;
						
						$articles.not( $article.removeClass('blur').addClass('active') )
								 .removeClass('active')
								 .addClass('blur');
						
					}, 65 );
					
				});
				
				$container.on( 'mouseleave', function( event ) {
					
					clearTimeout( timeout );
					$articles.removeClass('active blur');
					
				});
			
			});
		</script>
        
</head>
<body>
    
     <div class="container">
            <!-- Codrops top bar -->
          <div class="codrops-top">
          <!--<a>Waktu :
              <span id="jam"></span>
          </a>-->
                
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            <a href="index.php" > 
            <img src="images/logota.png" width="400" height="80" alt="E-Learning System ITS" />
            </a>
            <header>
                <h1></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                  
                <div id="wrapper">
                <h1>Quiz Page @ E-Learning System ITS</h1>
		<div style="width:50%; background-color:white; margin:auto; border-radius: 10px; border: 1px solid; " align="center">
		<?php
		$a = $_POST['matkul'];
		$sql = "select pertanyaan.* from pertanyaan, quiz where quiz.matkul_id=".$a." and quiz.id_quiz=pertanyaan.quiz_id and pertanyaan.status_aktif=1";
		
		$hasil = mysql_query($sql);
		$row = mysql_fetch_assoc($hasil);
		
		echo $row['pertanyaan_text'];
		$_SESSION['quiz'] = $row['pertanyaan_id'];
		?>



		<?php
		$abc = "SELECT * FROM jawaban WHERE pertanyaan_id=".$row['pertanyaan_id'];
		$hasil2 = mysql_query($abc);
		$hasil3 = mysql_fetch_array($hasil2);
		if (!$row) :?>
			<h2> Mohon Maaf </h2>
			<h2> Kuis Belum Aktif</h2>
		<?php elseif ($hasil3) : ?>
		<form method='post' action='cekjawaban.php'>
		<?php
			echo "<input type='radio' name='pilih' value='".$hasil3['jawaban_id']."' /> &nbsp;".$hasil3['jawaban_text'];
			echo "<br>";
			while($aye = mysql_fetch_array($hasil2)){
			echo "<input type='radio' name='pilih' value='".$aye['jawaban_id']."' /> &nbsp;".$aye['jawaban_text'];
			echo "<br>";
			}
		?>
		</br><input type="submit" value="Submit" style="width: 80px; height:13px;border: 1px solid;" align="center">
		</form>

		<?php else : ?>
			<form method='post' action='cekjawaban2.php'>
			<input type='text' name='pilih'/ maxlength="20" style="width: 300px; height: 50px"></br>
			<input type="submit" value="Submit" style="width: 80px; height:13px; border: 1px solid;">
			</form>
		<?php endif; ?> 
		</div>                       
                <section class="ib-container" id="ib-container">
				
		</section>
    
        </div>
    </body>
</html>

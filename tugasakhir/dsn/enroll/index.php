<?php
session_start();

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
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" type="text/css" media="screen"/>
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
            
            
            <a href="index.php" > 
            <img src="images/logota.png" width="400" height="80" alt="E-Learning System ITS" />
            </a>
	    
	    <div id="content">	
	    			
	    
                    <div id="wrapper">
                    <h1>Enroll Mahasiswa</h1>
	    <div id="steps" align="center">
            <div class="navbar" style="width:70%">
	    <div class="navbar-inner">
	    <a class="brand" href="../">Home</a>
	    <ul class="nav">
	    <li><a href="#">Enroll Mahasiswa</a></li>
	    <li><a href="../kuis/">Interactive Quiz</a></li>
	    <li><a href="http://10.151.36.31/demo/demo3.jsp">Video Conference</a></li>
	    <li><a href="http://its.ac.id">ITS</a></li>
	    </ul>
	    </div>
	    </div>	
	    </div>

                <section class="ib-container" id="ib-container" align="center">
	        <a href="/tugasakhir/dsn/matkul/tambahmatkul.php" class="btn btn-warning">Tambahkan Mata Kuliah</a></br></br>
					
		<div id="steps" align="center">
                    
                    
                <fieldset class="step">
			
                <form id="form1" name="form1" method="post" action="inputenroll.php" >
		<select id="mahasiswa" name="mahasiswa">
					<option value="Daftar Nama Mahasiswa" selected>- Daftar Nama Mahasiswa -</option>
					
					

			    <?php

			    	include 'script/db_config.php';
					$sql = "SELECT * FROM `user` WHERE status=3";
					
					$result = mysql_query($sql);

					while($row = mysql_fetch_array($result)){
						echo "<option value=". $row['user_id']. ">";
						echo $row['nama_user'];
						echo "</option>";}
				?>
		</select></br>

		<select align="center" id="matkul" name="matkul">
					<option value="Daftar Mata Kuliah" selected>- Daftar Mata Kuliah -</option>
					
					

			    <?php

			    	include 'script/db_config.php';
					$sql = "SELECT matkul_id,matkul_nama, nama_user FROM user,matkul WHERE user.user_id=matkul.matkul_creator";
					
					$result = mysql_query($sql);

					while($row = mysql_fetch_array($result)){
						echo "<option value=". $row['matkul_id']. ">";
						echo $row['matkul_nama']. " || ". $row['nama_user'];
						echo "</option>";}
				?>
		</select></br></br></br></br>

		<button class="btn btn-danger" type="submit">Daftarkan</button>
		
                </div>
				
			</section>
        </div>
        </div>
    </body>
</html>

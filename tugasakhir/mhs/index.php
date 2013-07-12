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
                
                <span class="right">
                    <a href=" /tugasakhir/script/logout.php">
                        <strong>Logout</strong>
                    </a>
                </span>
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            <a href="index.php" > 
            <img src="images/logota.png" width="400" height="80" alt="E-Learning System ITS" />
            </a>
            <header>
                <h2>Selamat Datang di E-learning System ITS</h2>
				
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <div id="wrapper">
                    <h1>Student Page @ E-learning System ITS</h1>                   
            <section class="ib-container" id="ib-container">
		<form id="form1" name="form1" method="post" action="kuis.php" >
		<select align="center" id="matkul" name="matkul">
					<option value="Daftar Mata Kuliah" selected>- Daftar Mata Kuliah -</option>
					
					

			    <?php

			    	include 'script/db_config.php';
				$a = $_SESSION['user_id'];
					$sql = "SELECT * FROM role_matkul,matkul WHERE role_matkul.user_id=$a AND role_matkul.matkul_id=matkul.matkul_id";
					
					$result = mysql_query($sql);

					while($row = mysql_fetch_array($result)){
						echo "<option value=". $row['matkul_id']. ">";
						echo $row['matkul_nama']. " || ". $row['nama_user'];
						echo "</option>";}
				$_SESSION['matkul_id']=$row['matkul_id'] ;
				?>
		</select></br></br></br></br>
		

		<button type="submit" id="button1" name="button1">MASUK</button>
		</form>	
			</section>   
        </div>
    </body>
</html>

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
                <h2>Lecturer Site E-learning System ITS</h2>
				
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <div id="wrapper">
                    <h1>Lecturer E-learning System ITS</h1>
                              
                <section class="ib-container" id="ib-container">
				<article>
			    <header>
						<h3><a href="/tugasakhir/dsn/matkul">Menambah Mata Kuliah</a></h3>
						<span>May 28, 2013 by Emerson Eridiansyah Zayin</span>
					</header>
					<p>Today we will show you some examples of websites that are using beautiful and inspiring color combinations that match perfectly and create an eye candy...</p>
				</article>
<article>
			    <header>
						<h3><a href="/tugasakhir/dsn/managematkul">Manajemen Mata Kuliah</a></h3>
						<span>May 28, 2013 by Emerson Eridiansyah Zayin</span>
					</header>
					<p>Today we will show you some examples of websites that are using beautiful and inspiring color combinations that match perfectly and create an eye candy...</p>
				</article>
				<!--<article>
					<header>
						<h3><a target="_blank" href="http://tympanus.net/codrops/2011/12/08/design-it-to-build-it-what-to-consider-when-designing-for-the-web/">Design It to Build It: What to Consider When Designing for the Web</a></h3>
						<span>May 28, 2013 by Emerson Eridiansyah Zayin</span>
					</header>
					<p>For me, Photoshop is becoming more and more of a prototyping or blue printing tool: it’s basically just a canvas...</p>
				</article>
				<article>
					<header>
						<h3><a target="_blank" href="http://tympanus.net/codrops/2011/12/07/splash-and-coming-soon-page-effects-with-css3/">Splash and Coming Soon Page Effects with CSS3</a></h3>
						<span>May 28, 2013 by Emerson Eridiansyah Zayin </span>
					</header>
					<p>CSS3 opens up so many crazy possibilities and today we want to show you how to go wild with splash and coming soon page effects using CSS3 animations.</p>
				</article>
				<article>
					<header>
						<h3><a target="_blank" href="http://its.ac.id">Kabar Terbaru ITS Surabaya</a></h3>
						<span>May 28, 2013 by Emerson Eridiansyah Zayin</span>
					</header>
					<p>Beranda website resmi Institut Teknologi Sepuluh Nopember Surabaya. Berisi tentang kabar-kabar terbaru seputar kampus ITS dan prestasi-prestasi mahasiswa maupun staf pengajar dalam bidang akademik dan non-akademik.</p>
				</article>
				<article>
					<header>
						<h3><a target="_blank" href="http://10.151.36.31/client/BigBlueButton.html">Video Conference</a></h3>
						<span>May 28, 2013 by Emerson Eridiansyah Zayin</span>
					</header>
					<p>Beranda website resmi Institut Teknologi Sepuluh Nopember Surabaya. Berisi tentang kabar-kabar terbaru seputar kampus ITS dan prestasi-prestasi mahasiswa maupun staf pengajar dalam bidang akademik dan non-akademik.</p>
				</article>-->
			</section>
    
        </div>
    </body>
</html>

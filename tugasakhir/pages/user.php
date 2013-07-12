<?php
//protected_page.php
/*require_once("checklogin.php");*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>ITS Integrated Parking System</title>
        <script src="/parkirits/js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        
        <script>
  			$(document).ready(function() {
   				 	setInterval(function() {
        			 $('#jam').load('script/jam.php?acak='+ Math.random());
    				}, 1000);
  				});
		</script>
        
</head>
<body>
    
     <div class="container">
            <!-- Codrops top bar -->
          <div class="codrops-top">
          <a>Waktu :
              <span id="jam"></span>
          </a>
                
                <span class="right">
                    <a href=" http://its.ac.id/">
                        <strong>ITS Homepage</strong>
                    </a>
                </span>
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            <a href="index.php" > <img src="images/logo.png" width="226" height="100" alt="Selamat datang di Portal ITS integrated Parking System" /></a>
            <header>
                <h2>Selamat Datang di Portal ITS Integrated Parking System</h2>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="script/login.php" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="on">
                                <h1>LOG IN</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username</label>
                                    <input id="username" name="username" required type="text" placeholder="itsparking"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required type="password" placeholder="passw0Rdp4rKIn6" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Biarkan saya tetap masuk</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="LOGIN" /> 
								</p>
                                <p class="change_link">
									Belum terdaftar ?
									<a href="#toregister" class="to_register">Daftar</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> DAFTAR </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="usernamesignup" required type="text" placeholder="itsparking" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Email</label>
                                    <input id="emailsignup" name="emailsignup" required type="email" placeholder="parking@its.ac.id"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup" name="passwordsignup" required type="password" placeholder="passw0Rdp4rKIn6"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Konfirmasi Password</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required type="password" placeholder="passw0Rdp4rKIn6"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Daftar"/> 
								</p>
                                <p class="change_link">  
									Sudah terdaftar ?
									<a href="#tologin" class="to_register"> Masuk </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
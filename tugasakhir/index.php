<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>E-Learning System ITS</title>
        <script src="js/jquery.js"></script>
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
            
            <a href="index.php" > 
            <img src="images/logota.png" width="400" height="80" alt="E-Learning System ITS" />
            </a>
            <header>
                <h2></h2>
            </header>
            
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump -->
                    
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
               <div id="wrapper">
                	<div id="login" class="animate form">
                   	<form action="script/login.php" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="on">
                                <h1>LOG IN</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="" > Username</label>
                                    <input id="username" name="username" required type="text" placeholder="masukkan username"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon=""> Password </label>
                                    <input id="password" name="password" required type="password" placeholder="masukkan password" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="LOGIN" /> 
								</p>
                               
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

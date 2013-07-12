<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>E-Learning System ITS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/sliding.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <!-- Preview Photo Script -->
        
		<script language="JavaScript">
	function showPreview(ele)
	{
		document.frmMain.imgAvatar.src=ele.value;
	}
		</script>

  				
        

<!-- End Of  Validate Form Script -->

         <script>
			$(function() {
			$( "#datepicker" ).datepicker();
			});
		</script>

    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        /*{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }*/
		
    </style>
    <body>
        <div id="content">
            <div id="wrapper">
                <h2>Soal Pilihan Ganda</h2></br></br>
 		
		<h3></h3></br>
			<table border="0">
 				<tr>
 				</tr>

			<div id="steps">
			<form method="post" action="tambahsoalpg.php">
			<table class="table">
				<?php
				 include "script/db_config.php";
				 $var = $_GET['id'];
				 echo "<input type='hidden' name='matkul_id' value='$var'>";
				?>
				<h4>Nama Soal Pilihan Ganda		:</h4>	
				<input type="text" name="kuis" value="" placeholder="Masukkan Nama Soal"></br></br>			
				<h4>Masukkan soal pilihan ganda pada kotak yang tersedia di bawah ini</h4>
				<textarea name="comments" cols="100" rows="4">
				</textarea></br></br>
				<h5>Tentukan jawaban yang benar dengan memilih salah satu radio button</h5>
				a. <input type=text name="a" size=60 value=""><input type=radio name=correct value=1><br>
				b. <input type=text name="b" size=60 value=""><input type=radio name=correct value=2><br>
				c. <input type=text name="c" size=60 value=""><input type=radio name=correct value=3><br>
				d. <input type=text name="d" size=60 value=""><input type=radio name=correct value=4><br></br>
				<button class="btn btn-primary" type="submit">Tambahkan Soal</button>		
				</td></tr>

			</table>
			</div>


			</table>
                
            </div>
        </div>
    </body>
</html>

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
        <div>
            
        </div>
        <div id="content">
	    <div class="navbar">
	    <div class="navbar-inner">
	    <a class="brand" href="../">Home</a>
	    <ul class="nav">
	    <li><a href="../enroll/">Enroll Mahasiswa</a></li>
	    <li><a href="#">Interactive Quiz</a></li>
	    <li><a href="http://10.151.36.31/demo/demo3.jsp">Video Conference</a></li>
	    <li><a href="http://its.ac.id">ITS</a></li>
	    </ul>
	    </div>
	    </div>
            <div id="wrapper">
                <h2>Manajemen Kuis</h2></br></br>
 		
		<h3></h3></br>
			<table class="table">
 				<tr>
 				</tr>
				<?php
				 include "script/db_config.php";
				 $sql = "SELECT * FROM matkul";
				 $result = mysql_query($sql);
				 $i=1;
				 while($r=mysql_fetch_array($result)){
				  echo "<tr>
				    	<td>".$i."</td>
				      	<td>".$r['matkul_nama']."</td>
				    	<td><a href='daftarkuis.php?id=".$r['matkul_id']."'>Kuis</a></td>
				     	</tr>";
				  $i++;
				 }
				?>
			</table>
                </div>
            </div>
        </div>
    </body>
</html>

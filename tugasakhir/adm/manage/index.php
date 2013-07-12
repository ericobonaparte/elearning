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
	    <div class="navbar">
	    <div class="navbar-inner">
	    <a class="brand" href="../">Home</a>
	    <ul class="nav">
	    <li class="active"><a href="#">Daftar Pengguna</a></li>
	    <li><a href="http://10.151.36.31/demo/demo3.jsp">Video Conference</a></li>
	    <li><a href="http://its.ac.id">ITS Surabaya</a></li>
	    </ul>
	    </div>
	    </div>
            <div id="wrapper">
                <h2>Manajemen Pengguna</h2></br>
<h4><a href="/tugasakhir/adm/data/">Tambahkan Pengguna</a></h4></br>
		<h3></h3>
			    <table class="table">

<?php
 include "script/db_config.php";
 $sql = "SELECT * FROM user";
 $result = mysql_query($sql);
 $i=1;
 while($r=mysql_fetch_array($result)){
  echo "<tr>
    <td>".$i."</td>
    <td>".$r['nama_user']."</td>
      <td>".$r['status']."</td>
      <td>".$r['password']."</td>
    <td><a href='edit.php?id=".$r['user_id']."'>Edit</a>
        <a href='delete.php?id=".$r['nama_user']."'>Delete</a></td>
     </tr>";
  $i++;
 }
?>
</table>
                </div>
                <!--<div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Biodata</a>
                        </li>
                        <li>
                            <a href="#">Info Alamat</a>
                        </li>
                        <li>
                            <a href="#">Info Kontak</a>
                        </li>
                        <li>
                            <a href="#">Upload Foto</a>
                        </li>
						<li>
                            <a href="#">Validasi</a>
                        </li>
                    </ul>
                </div>-->
            </div>
        </div>
    </body>
</html>

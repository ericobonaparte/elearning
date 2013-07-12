<?php
session_start();

if (!isset($_SESSION['login'])){
	header('location: /tugasakhir/');
}

?>
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
	    <li><a href="../kuis/">Interactive Quiz</a></li>
	    <li><a href="http://10.151.36.31/demo/demo3.jsp">Video Conference</a></li>
	    <li><a href="http://its.ac.id">ITS</a></li>
	    </ul>
	    </div>
	    </div>
				<div id="wrapper">
				<h2>Daftar Kuis</h2></br></br>

				<?php
				 include "script/db_config.php";
				 $id = $_GET['id'];
				?>
				<button class="btn btn-danger" type="button" onClick="location.href='pg.php?id=<?php echo $id?>'"/>Pilihan Ganda</button>
<button class="btn btn-danger" type="button" onClick="location.href='essay.php?id=<?php echo $id?>'"/>Essay</button></br></br>
			
				<table class="table table-hover">
				<?php
				 include "script/db_config.php";
				 $id = $_GET['id'];
				 $sql = "SELECT * FROM quiz WHERE matkul_id='".$id."'";
				 $result = mysql_query($sql);
				 $i=1;
				 while($r=mysql_fetch_array($result)){
				 $abc = "SELECT status_aktif FROM pertanyaan WHERE quiz_id='".$r['id_quiz']."'";
				 $hasil = mysql_query($abc) ;
	 			 $def = mysql_fetch_assoc($hasil) ;
				  echo "<tr>
				    <td>".$i."</td>
				    <td>".$r['nama_quiz']."</td>
				    <td><a href='deletekuis.php?id=".$r['id_quiz']."'>Hapus</a></td>";
				  if ($def['status_aktif'] == 0) {
					echo "<td><a href='status1.php?id=".$r['id_quiz']."'>Start</a></td>";
				  }
				  else if ($def['status_aktif'] == 1) {
					echo "<td><a href='status2.php?id=".$r['id_quiz']."'>Stop</a></td>";
				  }
				  else {
					echo "<td><a href='rekap.php?id=".$r['id_quiz']."'>Lihat Hasil</a></td>";
				  }
				  echo "</tr>";
				  $i++;
				 }
				?>
				</table>

				</div>
			</div>
		   </div>
        </div>
    </body>
</html>

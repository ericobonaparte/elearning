     <?php
	 	session_start();
		require_once __DIR__ . '/db_config.php';
        include "db_config.php";
        $username = $_POST['username'];
        $password = md5($_POST['password']);
       
        $login = mysql_query("SELECT * FROM user WHERE nama_user='$username' AND password='$password'");
        $hasil = mysql_num_rows($login);
       
        if ($hasil > 0)
        {
		$row = mysql_fetch_array($login);
		$a = $row[0];		
		$_SESSION['login']=$username;
		$_SESSION['user_id']=$a;

		if ($row[2]==1)
			{header('location:/tugasakhir/adm/');		
			}    
			else if ($row[2]==2)
			{ header('location:/tugasakhir/dsn/');}    
				else if ($row[2]==3)
				{header('location:/tugasakhir/mhs/');} 	
        }
        else{ echo "USERNAME DAN PASSWORD TIDAK COCOK! <br> <a href='index.php'>KEMBALI KE HALAMAN SEBELUMNYA</a>"; }
    ?>

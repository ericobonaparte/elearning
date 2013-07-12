<?php

//define('DB_USER', "root"); // db user
//define('DB_PASSWORD', ""); // db password (mention your db password here)
//define('DB_DATABASE', "parking"); // database name
//define('DB_SERVER', "localhost"); // db server


    
    $server = "10.151.36.21";
    $username = "parking";
    $password = "parking123!";
    $database = "parking";

    // Koneksi dan memilih database di server
    mysql_connect($server,$username,$password) or die("Koneksi gagal");
    mysql_select_db($database) or die("Database tidak bisa dibuka");


?>


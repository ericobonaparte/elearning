<?php
//panggil file config.php untuk menghubung ke server
require_once ("db_connect.php");

$db = new DB_CONNECT();

//tangkap data dari form
$username = $_POST['usernamesignup'];
$password = $_POST['passwordsignup'];
$email = $_POST['emailsignup'];
 
//simpan data ke database
$query = mysql_query("INSERT INTO manajemen_user (username, password, email) VALUES('$username', '$password', '$email')") or die(mysql_error());
 
if ($query) {
    header('location:/parkirits/pages/edit_profil.php');
}
?>
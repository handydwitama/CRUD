<?php

$host = "localhost";
$user = "handy";
$pass = "thanmore";
$db = "CRUD";
$table = "username";

$konek = mysqli_connect($host,$user,$pass,$db);
if (!$konek) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


?>


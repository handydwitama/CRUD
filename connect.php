<?php

$host = "localhost";
$user = "handy";
$pass = "thanmore";
$db = "CRUD";
$table = "pendaftaran";

$konek = mysqli_connect($host,$user,$pass,$db);
if (!$konek) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


?>


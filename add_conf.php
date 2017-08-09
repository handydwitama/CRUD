<?php

include 'connect.php';


$nama = $_POST['nama']; 
$umur = $_POST['umur']; 
$email = $_POST['email']; 
$alamat = $_POST['alamat']; 

$query = "INSERT INTO pendaftaran(id,nama,Umur,email,alamat) VALUES ('','$nama','$umur','$email','$alamat')"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "add user berhasil..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/index.php");
	}


?>
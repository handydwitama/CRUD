<?php

include 'connect.php';

$id = $_GET['id'];
$nama = $_POST['nama']; 
$umur = $_POST['umur']; 
$email = $_POST['email']; 
$alamat = $_POST['alamat']; 

$query = "UPDATE username SET Umur='$umur', email='$email', alamat='$alamat' WHERE username.id = '$id'"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "edit user berhasil..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/masteruser.php");
	}


?>
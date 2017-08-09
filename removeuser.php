<?php

include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM pendaftaran WHERE id='$id'"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "user berhasil dihapus..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/index.php");
	}


?>
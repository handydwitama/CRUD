<?php

include 'connect.php';

$id = $_GET['idbarang'];

$query = "DELETE FROM master_barang WHERE master_barang.id_barang='$id'"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "barang berhasil dihapus..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/masterbarang.php");
	}


?>
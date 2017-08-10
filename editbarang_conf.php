<?php

include 'connect.php';

$id = $_GET['idbarang'];
$namabarang = $_POST['namabarang']; 
$qty = $_POST['qty']; 
$harga = $_POST['harga']; 

$query = "UPDATE master_barang SET qty='$qty', harga='$harga' WHERE master_barang.id_barang = '$id'"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "edit barang berhasil..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/masterbarang.php");
	}


?>
<?php

include 'connect.php';


$namabarang = $_POST['namabarang']; 
$qty = $_POST['qty']; 
$harga = $_POST['harga']; 


$query = "INSERT INTO master_barang(id_barang,nama_barang,stock,harga) 
VALUES ('','$namabarang','$qty','$harga')"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "add barang berhasil..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/masterbarang.php");
	}


?>
<?php

include 'connect.php';


$id = $_GET['id'];
$barang = $_GET['barang'];

$query = "UPDATE list_pembelian SET qty='$quantity' WHERE nama_barang = '$i'"; 
$data = mysqli_query($konek,$query)or die(mysqli_error()); 
		
	
	
echo "edit list pembelian berhasil..."; 
header("Refresh:2; url=http://handy.orange.com/crud/editlistpembelian.php?id=$nama");

?>
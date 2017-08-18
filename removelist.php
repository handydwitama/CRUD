<?php

include 'connect.php';

$nama = $_GET['nama'];
$idpembelian = $_GET['id'];
$barang = $_GET['barang'];
$qr = "SELECT id_barang FROM master_barang WHERE nama_barang ='$barang'";
$res = mysqli_query($konek, $qr) or die(mysqli_error());
while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
	$id_barang = $row['id_barang'];
}

$query = "DELETE FROM list_pembelian WHERE id_pembelian='$idpembelian' AND id_barang ='$id_barang'"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 

	echo "data berhasil dihapus..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/editlistpembelian.php?id=$nama");
	


?>
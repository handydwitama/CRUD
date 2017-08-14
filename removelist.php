<?php

include 'connect.php';

$nama = $_GET['nama'];
$idpembelian = $_GET['id'];

$query = "DELETE FROM list_pembelian WHERE id_pembelian='$idpembelian'"; 

$data = mysqli_query($konek,$query)or die(mysqli_error()); 
if($data) 
	{ echo "data berhasil dihapus..."; 
	header("Refresh:2; url=http://handy.orange.com/crud/editlistpembelian?nama.php");
	}


?>
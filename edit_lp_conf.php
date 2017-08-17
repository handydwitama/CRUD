<?php

include 'connect.php';


$nama = $_GET['id'];
for ($i=1; $i < 100; $i++) { 
	
	$id = $_POST[$i];
	
	
	if ($id>0) {
		$query = "UPDATE list_pembelian SET qty='$id' WHERE id_pembelian = '$i'"; 
		$data = mysqli_query($konek,$query)or die(mysqli_error()); 
		
	}
	
}

echo "edit list pembelian berhasil..."; 
header("Refresh:2; url=http://handy.orange.com/crud/editlistpembelian.php?id=$nama");

?>
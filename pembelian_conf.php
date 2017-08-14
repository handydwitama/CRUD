<?php

include 'connect.php';

$today = date("Y-m-d H:i:s"); 
$nama = $_POST['nama']; 

for ($i=1; $i < 100; $i++) { 
	$idbarang = $_POST[$i];
	
	if ($idbarang>0) {
		$query = "SELECT * FROM master_barang WHERE id_barang ='$i'"; 
		$hasil=mysqli_query($konek,$query); 
		while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC)){
			echo $idbarang;
			echo $row['nama_barang'];
		}
		
	}
	
}

?>
<?php

require_once('connect.php');

$today = date("Y-m-d H:i:s"); 
$nama = $_POST['nama'];
$barang[] = $_POST['barang'];
$qty[] = $_POST['quantity'];


foreach ($barang as $value) {
	foreach ($qty as $k) {
		for ($i=0; $i < 100 ; $i++) { 
			if (isset($value[$i])==TRUE){
				$query= "INSERT INTO list_pembelian(id_pembelian,id,id_barang,tanggal,nama,nama_barang,qty,jumlah)
					VALUES ('',(SELECT id FROM username WHERE nama='$nama'),
						(SELECT id_barang FROM master_barang WHERE nama_barang='$value[$i]'),
						'$today', '$nama', '$value[$i]', '$k[$i]', 
						(SELECT (SELECT harga FROM master_barang WHERE nama_barang='$value[$i]') * '$k[$i]'))";
				$data = mysqli_query($konek,$query)or die(mysqli_error()); 
				$que = "UPDATE master_barang SET stock = (stock - '$k[$i]') WHERE nama_barang='$value[$i]'";
				$data1 = mysqli_query($konek,$que)or die(mysqli_error()); 
			}
		}
	}
	
}

echo "Berhasil melakukan pembelian..."; 
header("Refresh:2; url=http://handy.orange.com/crud/listpembelian.php");


 
?>
<?php

require_once('connect.php');

$today = date("Y-m-d H:i:s"); 
$nama = $_POST['nama'];
$barang[] = $_POST['barang'];
$qty[] = $_POST['quantity'];

$qu = "SELECT id_pembelian FROM list_pembelian ORDER BY id_pembelian DESC LIMIT 1";
$res = mysqli_query($konek,$qu) or die(mysql_error());
while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
    {
       $kode = $row['id_pembelian'];
    }


preg_match("/(\D+)(\d+)/", $kode, $matches);
$product_kode = $matches[1];
$new_id = intval($matches[2]);
$new_id++;
$kodelength = 4;
$idlength = strlen($new_id);
$missing = $kodelength - $idlength;

for ($i=0; $i < $missing; $i++) { 
	$new_id = "0".$new_id;
}
$id_baru = $product_kode.$new_id;

foreach ($barang as $value) {
	foreach ($qty as $k) {
		for ($i=0; $i < 100 ; $i++) { 
			if (isset($value[$i])==TRUE){
				$query= "INSERT INTO list_pembelian(id_pembelian,id_user,id_barang,tanggal,qty,jumlah)
					VALUES ('$id_baru',(SELECT id FROM username WHERE nama='$nama'),
						(SELECT id_barang FROM master_barang WHERE nama_barang='$value[$i]'),
						'$today', '$k[$i]', 
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
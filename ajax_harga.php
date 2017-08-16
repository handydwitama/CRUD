<?php

	require_once('connect.php');

	$nama_barang = $_POST['nama_barang'];
	$q="SELECT harga FROM master_barang where nama_barang = '$nama_barang'";

      $res=mysqli_query($konek,$q);   

      while ($baris = mysqli_fetch_array($res, MYSQLI_ASSOC))
	    {
	      	$arr = array(
				"harga" => $baris['harga'], 
			);
	    }
	
	echo json_encode($arr);
?>
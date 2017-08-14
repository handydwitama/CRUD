<?php

	require_once('connect.php');

	$id_barang = $_POST['id_barang'];
	$q="SELECT harga FROM master_barang where id_barang = '$id_barang'";

      $res=mysqli_query($konek,$q);   

      while ($baris = mysqli_fetch_array($res, MYSQLI_ASSOC))
	    {
	      	$arr = array(
				"harga" => $baris['harga'], 
			);
	    }
	
	echo json_encode($arr);
?>
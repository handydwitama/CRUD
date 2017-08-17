<!DOCTYPE HTML> 
<html> 
<head> 
<title>Edit Barang</title> 
</head> 
<body> 

<?php
include 'connect.php';

$id = $_GET["idbarang"];

$query = "SELECT * FROM master_barang where id_barang = '$id'";

$hasil=mysqli_query($konek,$query);    
$row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);

$namabarang = $row['nama_barang'];
$qty = $row['stock'];
$harga = $row['harga'];



?>

  Edit Barang
  <table border="0"> 
    <tr> 
      <form method="POST" action="editbarang_conf.php?idbarang=<?php echo $id;?>"> 
      <td>Nama Barang</td>
      <td> <input type="text" name="namabarang" value="<?php echo $namabarang;?>" readonly ></td> 
    </tr> 
    <tr> 
      <td>Stock</td>
      <td> <input type="text" name="qty" value="<?php echo $qty;?>"></td> 
    </tr> 
    <tr> 
      <td>Harga</td>
      <td> <input type="text" name="harga" value="<?php echo $harga;?>"></td> 
    </tr> 
    
    
    <tr> 
      <td><input id="button" type="submit" name="submit" value="Confirm"></td> 
    </tr>
    
      </form> 
</table> 
<br>
<input type="button" onclick="location.href='http://handy.orange.com/crud/masterbarang.php';" value="Back" />
</body> 
</html>

<!DOCTYPE HTML> 
<html> 
<head> 
<title>Add Barang</title> 
</head> 
<body> 

  Add Barang Baru
  <table border="0"> 
    <tr> 
      <form method="POST" action="addbarang_conf.php"> 
      <td>Nama Barang</td>
      <td> <input type="text" name="namabarang"></td> 
    </tr> 
    <tr> 
      <td>Stock</td>
      <td> <input type="text" name="qty"></td> 
    </tr> 
    <tr> 
      <td>Harga</td>
      <td> <input type="text" name="harga"></td> 
    </tr> 
   
    
    <tr> 
      <td><input id="button" type="submit" name="submit" value="Add Barang"></td> 
    </tr> 
      </form> 
</table>
<br> 
<input type="button" onclick="location.href='http://handy.orange.com/crud/masterbarang.php';" value="Back" />
</body> 
</html>

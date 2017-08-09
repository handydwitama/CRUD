<!DOCTYPE HTML> 
<html> 
<head> 
<title>View user</title> 
</head> 

<?php
include 'connect.php';

$id = $_GET["id"];

$query = "SELECT * FROM pendaftaran where id = '$id'";

$hasil=mysqli_query($konek,$query);    
$row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);

$nama = $row['nama'];
$umur = $row['Umur'];
$email = $row['email'];
$alamat = $row['alamat'];


?>
<body> 

  View User
  <table border="0"> 
    <tr> 
      <form method="" action="index.php"> 
      <td>Nama</td>
      <td> <input type="text" name="nama" value="<?php echo $nama;?>" readonly ></td> 
    </tr> 
    <tr> 
      <td>Email</td>
      <td> <input type="text" name="email" value="<?php echo $email;?>" readonly></td> 
    </tr> 
    <tr> 
      <td>Umur</td>
      <td> <input type="text" name="umur" value="<?php echo $umur;?>" readonly></td> 
    </tr> 
    <tr> 
      <td>Alamat</td>
      <td> <input type="text" name="alamat" value="<?php echo $alamat;?>" readonly></td> 
    </tr> 
    <tr> 
      <td>
        <button><a href='http://handy.orange.com/crud/'>Back</a></td></button>
      </td> 
    </tr> 
  
      </form> 
</table> 

</body> 
</html>

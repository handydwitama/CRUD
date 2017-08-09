<!DOCTYPE HTML> 
<html> 
<head> 
<title>Edit user</title> 
</head> 
<body> 

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

  Edit User
  <table border="0"> 
    <tr> 
      <form method="POST" action="edituser_conf.php?id=<?php echo $id;?>"> 
      <td>Nama</td>
      <td> <input type="text" name="nama" value="<?php echo $nama;?>" readonly ></td> 
    </tr> 
    <tr> 
      <td>Email</td>
      <td> <input type="text" name="email" value="<?php echo $email;?>"></td> 
    </tr> 
    <tr> 
      <td>Umur</td>
      <td> <input type="text" name="umur" value="<?php echo $umur;?>"></td> 
    </tr> 
    <tr> 
      <td>Alamat</td>
      <td> <input type="text" name="alamat" value="<?php echo $alamat;?>"></td> 
    </tr> 
    
    <tr> 
      <td><input id="button" type="submit" name="submit" value="Confirm"></td> 
    </tr>
    <tr>
      <td><a href='http://handy.orange.com/crud/'>Back</a></td>
    </tr> 
      </form> 
</table> 

</body> 
</html>

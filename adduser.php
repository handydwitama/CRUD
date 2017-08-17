<!DOCTYPE HTML> 
<html> 
<head> 
<title>Add user</title> 
</head> 
<body> 

  Add User Baru
  <table border="0"> 
    <tr> 
      <form method="POST" action="add_conf.php"> 
      <td>Nama</td>
      <td> <input type="text" name="nama"></td> 
    </tr> 
    <tr> 
      <td>Email</td>
      <td> <input type="text" name="email"></td> 
    </tr> 
    <tr> 
      <td>Umur</td>
      <td> <input type="text" name="umur"></td> 
    </tr> 
    <tr> 
      <td>Alamat</td>
      <td> <input type="text" name="alamat"></td> 
    </tr> 
    
    <tr> 
      <td><input id="button" type="submit" name="submit" value="Add user"></td> 
    </tr> 
      </form> 
</table> 
<br>
<input type="button" onclick="location.href='http://handy.orange.com/crud/masteruser.php';" value="Back" />
</body> 
</html>

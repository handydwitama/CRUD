<?php include 'connect.php';
?>


<center> 
MENAMPILKAN DATA 
<br>
<br>
<button><a href="http://handy.orange.com/crud/adduser.php">Add user</a></button>
<table  border='1' Width='800'>  
<tr>
    <th> Nomor </th>
    <th> Nama </th>
    <th> Umur </th>
    <th> Email </th>
    <th> Alamat </th>
    
</tr>


<?php  
$queri="SELECT * FROM pendaftaran";

$hasil=mysqli_query($konek,$queri);    


while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>
        <td>".$row['id']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['Umur']."</td>
        <td>".$row['email']."</td>
        <td>".$row['alamat']."</td>
        <td><a href='http://handy.orange.com/crud/viewuser.php?id=".$row['id']."'>View</a> &nbsp; 
        <a href='http://handy.orange.com/crud/edituser.php?id=".$row['id']."'>Edit</a> &nbsp; 
        <a href='http://handy.orange.com/crud/removeuser.php?id=".$row['id']."'>Remove</a></td>
        </tr>";
        
        }

?>
</table>



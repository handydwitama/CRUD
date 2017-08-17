<?php include 'connect.php';
?>


<center> 
MENAMPILKAN DATA 
<br>
<br>
<input type="button" onclick="location.href='http://handy.orange.com/crud/adduser.php';" value="Add user" />

<table  border='1' Width='800'>  
<tr>
    <th> Nomor </th>
    <th> Nama </th>
    <th> Umur </th>
    <th> Email </th>
    <th> Alamat </th>
    <th> Action </th>
    
</tr>


<?php  
$queri="SELECT * FROM username";

$hasil=mysqli_query($konek,$queri);    
$no = 1;

while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>
        <td align='center'>".$no."</td>
        <td align='center'>".$row['nama']."</td>
        <td align='center'>".$row['Umur']."</td>
        <td align='center'>".$row['email']."</td>
        <td align='center'>".$row['alamat']."</td>
        <td align='center'><a href='http://handy.orange.com/crud/viewuser.php?id=".$row['id']."'>View</a> &nbsp; 
        <a href='http://handy.orange.com/crud/edituser.php?id=".$row['id']."'>Edit</a> &nbsp; 
        <a href='http://handy.orange.com/crud/removeuser.php?id=".$row['id']."'>Remove</a></td>
        </tr>";
        $no++;
        }

?>
</table>

<br>
<br>

<center> 
<input type="button" onclick="location.href='http://handy.orange.com/crud/index.php';" value="Back" />

<?php include 'connect.php';
?>


<center> 
MENAMPILKAN DATA BARANG
<br>
<br>
<input type="button" onclick="location.href='http://handy.orange.com/crud/addbarang.php';" value="Add barang" />

<table  border='1' Width='800'>  
<tr>
    <th> ID barang </th>
    <th> Nama Barang </th>
    <th> Stock </th>
    <th> Harga </th>
    <th> Action </th>
    
</tr>


<?php  
$queri="SELECT * FROM master_barang";

$hasil=mysqli_query($konek,$queri);    
$no = 1;

while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>
        <td align='center'>".$no."</td>
        <td align='center'>".$row['nama_barang']."</td>
        <td align='center'>".$row['stock']."</td>
        <td align='center'>".$row['harga']."</td>
        
        <td align='center'> 
        <a href='http://handy.orange.com/crud/editbarang.php?idbarang=".$row['id_barang']."'>Edit</a> &nbsp; 
        <a href='http://handy.orange.com/crud/removebarang.php?idbarang=".$row['id_barang']."'>Remove</a></td>
        </tr>";
        $no++;
        }

?>
</table>

<br>
<br>

<center> 
<input type="button" onclick="location.href='http://handy.orange.com/crud/index.php';" value="Back" />

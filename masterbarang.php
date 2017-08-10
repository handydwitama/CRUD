<?php include 'connect.php';
?>


<center> 
MENAMPILKAN DATA 
<br>
<br>
<button><a href="http://handy.orange.com/crud/addbarang.php">Add barang</a></button>
<table  border='1' Width='800'>  
<tr>
    <th> ID barang </th>
    <th> Nama Barang </th>
    <th> Quantity </th>
    <th> Harga </th>
   
    
</tr>


<?php  
$queri="SELECT * FROM master_barang";

$hasil=mysqli_query($konek,$queri);    
$no = 1;

while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>
        <td>".$no."</td>
        <td>".$row['nama_barang']."</td>
        <td>".$row['qty']."</td>
        <td>".$row['harga']."</td>
        
        <td> 
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

<button><a href="http://handy.orange.com/crud/index.php">Back</a></button>
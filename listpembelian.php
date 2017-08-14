<?php include 'connect.php';
?>


<center> 
MENAMPILKAN DATA PEMBELIAN SETIAP USER
<br>
<br>
<button><a href="http://handy.orange.com/crud/pembelian.php">Beli barang baru</a></button>
<br>
<br>
<table  border='1' Width='800'>  
<tr>
    <th> Nomor </th>
    <th> User </th>
    <th style="width:30%"> Tanggal Mulai Pembelian </th>
  
    <th> Action </th>
    
</tr>


<?php  
$queri="SELECT id_pembelian,nama,tanggal FROM list_pembelian GROUP BY nama ORDER BY tanggal ASC";

$hasil=mysqli_query($konek,$queri);    
$no = 1;

while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>
        <td><center>".$no."</center></td> 
        <td><center>".$row['nama']."</td>
        <td><center>".$row['tanggal']."</td>
      
        <td><center>
        <a href='http://handy.orange.com/crud/editlistpembelian.php?id=".$row['nama']."'>Lihat Detail</a> &nbsp; 
        </center
        
        </td>
        </tr>";
        $no++;
        }

?>
</table>

<br>

<center> 

<button><a href="http://handy.orange.com/crud/pembelian.php">Back</a></button>
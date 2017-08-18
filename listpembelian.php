<?php include 'connect.php';
?>


<center> 
MENAMPILKAN DATA PEMBELIAN SETIAP USER
<br>
<br>
<input type="button" onclick="location.href='http://handy.orange.com/crud/pembelian.php';" value="Beli barang baru" />

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
$queri="SELECT list_pembelian.id_pembelian, username.nama, list_pembelian.tanggal 
        FROM list_pembelian INNER JOIN username ON list_pembelian.id_user = username.id
        GROUP BY username.nama ORDER BY list_pembelian.tanggal ASC";

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
<input type="button" onclick="location.href='http://handy.orange.com/crud/pembelian.php';" value="Back" />

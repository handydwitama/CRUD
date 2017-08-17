<?php include 'connect.php';

$idpembeli = $_GET['id'];
?>


<form method="post" action="edit_lp_conf.php?id=<?php echo $idpembeli;?>" >  



<center> 
MENAMPILKAN DATA PEMBELIAN USER : <?php echo $idpembeli; ?>
  <br>
  <br>
  <br>


  <table border='1' Width='800'>  
<tr>
    <th> Nomor </th>
    <th style="width:20%"> Tanggal </th>
    <th> User </th>
    <th> Nama Barang </th>
    <th> Quantity </th>
    <th> Total Belanja </th>
    <th> Action </th>

</tr>


<?php  
$no = 1;
$qu="SELECT * FROM list_pembelian WHERE nama = '$idpembeli' ORDER BY tanggal ASC ";
$hasil=mysqli_query($konek,$qu);    
while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
      
 echo " <tr>
        <td><center>".$no."</center></td>
        <td><center>".$row['tanggal']."</td>
        <td><center>".$row['nama']."</td>
        <td><center>".$row['nama_barang']."</td>
        <td><center><input type='number' name='".$row['id_pembelian']."' min='1' max='10' step='1' value=".$row['qty']."></td>
        <td><center>".$row['jumlah']."</td>
        <td><center><a href='http://handy.orange.com/crud/removelist.php?id=".$row['id_pembelian']."&nama=$idpembeli'>Hapus</a></td></center>
        </tr>";
        $no++;
        }

?>
</table>
  
  <br><br>
  <input type="submit" name="submit" value="Confirmasi Edit">  
  <br><br>

</form>
<input type="button" onclick="location.href='http://handy.orange.com/crud/listpembelian.php';" value="Back" />

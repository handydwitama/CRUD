  <?php include 'connect.php';

$idtrans = $_GET['id'];

$qu = "SELECT list_pembelian.id_pembelian, list_pembelian.tanggal, username.nama, master_barang.nama_barang, 
      list_pembelian.qty, list_pembelian.jumlah
      FROM ((list_pembelian INNER JOIN username ON list_pembelian.id_user = username.id)
      INNER JOIN master_barang ON list_pembelian.id_barang = master_barang.id_barang)
      WHERE list_pembelian.id_pembelian = '$idtrans' ORDER BY list_pembelian.tanggal ASC ";
$hasil1=mysqli_query($konek,$qu); 
$hasil=mysqli_query($konek,$qu); 
while ($row1 = mysqli_fetch_array($hasil1, MYSQLI_ASSOC))
    {
      $tgl = $row1['tanggal'];
      $nm = $row1['nama'];
    }
?>


<center> 
MENAMPILKAN DATA TRANSAKSI :
  <br>
  <br>
  <p> <?php echo "ID Transaksi = ".$idtrans."<br>User = ".$nm."<br>Tanggal = ".$tgl ; ?></p>
  <br>


  <table border='1' Width='800'>  
<tr>
    <th> Nomor </th>
    <th> Nama Barang </th>
    <th> Quantity </th>
    <th> Total Belanja </th>
    <th> Action </th>

</tr>

<script type="text/javascript">
  var quan = document.getElementById('num[]');
  var asd = quan[0].innerHTML;
</script>
<?php  
$no = 1;
   
while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
      
 echo " <tr>
        <td><center>".$no."</center></td>
        <td><center>".$row['nama_barang']."</td>
        <td><center><input type='number' id='num[]' name='".$row['nama_barang']."' min='1' max='10' step='1' value=".$row['qty']."></td>
        <td><center>".$row['jumlah']."</td>
        <td><center><a href='http://handy.orange.com/crud/edit_lp_conf.php?id=".$row['id_pembelian']."&barang=".$row['nama_barang']."&qty='
        onclick = 'location.href=this.href+asd;return false;' >Edit</a>
        &nbsp; &nbsp;
        <a href='http://handy.orange.com/crud/removelaporan.php?id=".$row['id_pembelian']."&barang=".$row['nama_barang']."&nama=".$idtrans."'>Hapus</a>
        </td></center>
        </tr>";
        $no++;
        }

?>
</table>
  
  <br><br>



<input type="button" onclick="location.href='http://handy.orange.com/crud/laporanpt.php';" value="Back" />

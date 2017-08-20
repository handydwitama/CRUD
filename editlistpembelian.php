  <?php include 'connect.php';

$idpembeli = $_GET['id'];
?>


<center> 
MENAMPILKAN DATA PEMBELIAN USER : <?php echo $idpembeli; ?>
  <br>
  <br>
  <br>


  <table align="center" border='1' Width='800'>  
<tr>
    <th> ID Transaksi </th>
    <th style="width:20%"> Tanggal </th>
    
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
$qu = "SELECT list_pembelian.id_pembelian, list_pembelian.tanggal, username.nama, master_barang.nama_barang, 
      list_pembelian.qty, list_pembelian.jumlah
      FROM ((list_pembelian INNER JOIN username ON list_pembelian.id_user = username.id)
      INNER JOIN master_barang ON list_pembelian.id_barang = master_barang.id_barang)
      WHERE username.nama = '$idpembeli' ORDER BY list_pembelian.id_pembelian ASC ";
$hasil=mysqli_query($konek,$qu);    
while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
      
 echo " <tr>
        <td align='center'>".$row['id_pembelian']."</td>
        <td align='center'>".$row['tanggal']."</td>
        
        <td align='center'>".$row['nama_barang']."</td>
        <td align='center'><input type='number' id='num[]' name='".$row['nama_barang']."' min='1' max='10' step='1' value=".$row['qty']."></td>
        <td align='center'>".$row['jumlah']."</td>
        <td align='center'><a href='http://handy.orange.com/crud/edit_lp_conf.php?id=".$row['id_pembelian']."&barang=".$row['nama_barang']."&qty='
        onclick = 'location.href=this.href+asd;return false;' >Edit</a>
        &nbsp; &nbsp;
        <a href='http://handy.orange.com/crud/removelist.php?id=".$row['id_pembelian']."&barang=".$row['nama_barang']."&nama=".$idpembeli."'>Hapus</a>
        </td>
        </tr>";
        $no++;
        }

?>
</table>
  
  <br><br>



<input type="button" onclick="location.href='http://handy.orange.com/crud/listpembelian.php';" value="Back" />

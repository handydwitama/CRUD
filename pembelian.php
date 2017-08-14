<?php include 'connect.php';
$tgl = date("F j, Y"); 
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript">
function myFunction() {
    document.write ("");
  }

var a = 0;
</script>

<form method="post" action="pembelian_conf.php">  

Pilih User : <select name="nama" form="username">


<?php  

$que="SELECT * FROM username";
$hasil1=mysqli_query($konek,$que);    
while ($row1 = mysqli_fetch_array($hasil1, MYSQLI_ASSOC))
    {
      echo "<option value=".$row1['nama'].">".$row1['nama']."</option>";
    }
?>

</select>
&nbsp;&nbsp;&nbsp;
<?php echo $tgl; ?>
  <br><br>



  <table  border='1' Width='400'>  
<tr>
    <th> Nomor </th>
    <th> Nama Barang </th>
    <th> Harga Satuan</th>
    <th> Quantity </th>

</tr>
<tr>
    <td>1</td>
    <td><center><select class='barang' name='barang' id='barang'>
    <?php  
      $queri="SELECT * FROM master_barang";

      $hasil2=mysqli_query($konek,$queri);    


    while ($row2 = mysqli_fetch_array($hasil2, MYSQLI_ASSOC))
    {
      echo "<option value='".$row2['id_barang']."'>".$row2['nama_barang']."</option>";
    }

?>
    </select></td>
    <td>
      <p id="h" align="center">10000</p>
    </td>
    <td>
      <center>
      <input type="number" name="quantity" min="1" max="10" value="1">
      </center>
    </td>

</tr>


</table>

<button id="number1" onclick="">+</button>

  
  <br><br>
  <input type="submit" name="submit" value="Confirmasi Pembelian">  


</form>

<script type="text/javascript">
  var idselect = document.getElementById("barang");
  
  $(document).ready(function(){
    $(".barang").click(function(){
      $.ajax({
        url: "ajax_harga.php",
        
        type: 'post', // performing a POST request
          data : {
            id_barang : idselect.value
          },
          dataType: "json",
        success: function(data) {
        console.log(data);
      

        var element = document.getElementById("h");
       
        element.innerHTML = data.harga;
        }
      })
      
     
      

    });
  });
</script>



<button><a href="http://handy.orange.com/crud/listpembelian.php">Lihat Transaksi</a></button>
<br>
<br>
<button><a href="http://handy.orange.com/crud/index.php">Back</a></button>
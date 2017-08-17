<?php include 'connect.php';
$tgl = date("F j, Y"); 
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<form id="myForm" method="POST" action="pembelian_conf.php">  

Pilih User : <select name="nama" id="nama">


<?php  

$que="SELECT nama FROM username";
$hasil1=mysqli_query($konek,$que);    
while ($row1 = mysqli_fetch_array($hasil1, MYSQLI_ASSOC))
    {
      echo "<option>".$row1['nama']."</option>";
    }
?>

</select>
&nbsp;&nbsp;&nbsp;
<?php echo $tgl; ?>
  <br><br>



  <table id="theTable" border='1' Width='400'>  
<tr>
    <th> Nomor </th>
    <th> Nama Barang </th>
    <th> Harga Satuan</th>
    <th> Quantity </th>

</tr>

<tr id="templateRow" class="templateRow" align="center">
    <td class="nom">1</td>
    <td><select class='barang' name='barang[]' id='barang[]' onchange="ajax_harga(this);">
    <?php  
      $queri="SELECT * FROM master_barang";

      $hasil2=mysqli_query($konek,$queri);    


    while ($row2 = mysqli_fetch_array($hasil2, MYSQLI_ASSOC))
    {
      echo "<option value='".$row2['nama_barang']."'>".$row2['nama_barang']."</option>";
    }
    ?>

    </select></td>
    <td>
      <p id="h" class="h" align="center">10000</p>
    </td>
    <td>
      <center>
      <input type="number" name="quantity[]" min="1" max="10" value="1">
      </center>
    </td>


</tr>

</table>

<script type="text/javascript">

function mySubmit() {
    document.getElementById("myForm").submit();
}

var ajax_harga = function(event){
  var barang = $(event);
  var harga = barang.parent().parent().find(".h");

  $.ajax({
        url: "ajax_harga.php",
        
        type: 'post', // performing a POST request
          data : {
            nama_barang : barang.val()
          },
          dataType: "json",
        success: function(data) {
       harga.html(data.harga);
        }
      })

  console.log(harga.html());

}
  var a = 0;
  
  function getTemplateRow(){

    var x = document.getElementsByClassName("templateRow")[a].cloneNode(true);
    a++;;
    return x;
    

  }

  function addRow(){
    var t = document.getElementById("theTable");
    var rows = t.getElementsByTagName("tr");
    var r = rows[rows.length-1];
    r.parentNode.insertBefore(getTemplateRow(), r);
    document.getElementsByClassName("nom")[a].innerHTML = a+1;
    document.getElementsByClassName("barang")[(a-1)].value = document.getElementsByClassName("barang")[a].value;
  
  }

  function deleteRow(row){
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('theTable').deleteRow(a+1);
    a--;

  }

 
  
</script>
</form>

<button id="add" onclick="addRow();">+</button>
<button id="delete" onclick="deleteRow(this);">-</button>

<br>
<br>

<input type="button" onclick="mySubmit()" value="Confirmasi Pembelian">  
<br>
<br>

<input type="button" onclick="location.href='http://handy.orange.com/crud/listpembelian.php';" value="Lihat Transaksi" />
<br>
<br>
<input type="button" onclick="location.href='http://handy.orange.com/crud/index.php';" value="Back" />


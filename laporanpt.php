<?php include 'connect.php';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#startdate" ).datepicker();
    $( "#enddate" ).datepicker();
  } );

  
  

  function caritanggal(){
    var startd = $('#startdate').val();
    var d1 = startd.split("/");
    var from = d1[2]+-+d1[0]+-+d1[1];
    
    var endd = $('#enddate').val();
    var d2 = endd.split("/");
    var to = d2[2]+-+d2[0]+-+(parseInt(d2[1])+1);


    table = document.getElementById("mytable");
    tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++){
            td = tr[i].getElementsByTagName("td")[2];
            if (td){
                if (Date.parse(td.innerHTML) <= Date.parse(to) && Date.parse(td.innerHTML) >= Date.parse(from)){
                    tr[i].style.display = "";
                
                } else{
                    tr[i].style.display = "none";
                }
            }       
        }
    
  }
  </script>
</head>

<script type="text/javascript">
    function searchUser(){
        var input, filter, table, tr, td, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        

    }

</script>

<center> 
MENAMPILKAN DATA PEMBELIAN SETIAP TRANSAKSI 
<br>
<br>
<br>
SEARCH BERDASARKAN TANGGAL
<p>Start Date: <input type="text" id="startdate"> End Date: <input type="text" id="enddate"></p>
<input type="button" onclick="caritanggal()" value="Cari" />
<br>
<br>
<table id="mytable" align="center" border='1' Width='800'>  

<tr>
    <th> Transaksi ID</th>
    <th> User </th>
    <th style="width:30%"> Tanggal Pembelian </th>
    <th> Jumlah belanja</th>
    <th> Action </th>
    
</tr>


<?php  
$queri="SELECT list_pembelian.id_pembelian, username.nama, list_pembelian.tanggal, SUM(list_pembelian.jumlah) AS jml
        FROM list_pembelian INNER JOIN username ON list_pembelian.id_user = username.id
        GROUP BY list_pembelian.id_pembelian ORDER BY list_pembelian.id_pembelian ASC";

$hasil=mysqli_query($konek,$queri);    
$no = 1;

while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>
        <td align='center'>".$row['id_pembelian']."</center></td> 
        <td align='center'>".$row['nama']."</td>
        <td align='center'>".$row['tanggal']."</td>
        <td align='center'>".$row['jml']."</td>
        <td align='center'>
        <a href='http://handy.orange.com/crud/editlaporanpt.php?id=".$row['id_pembelian']."'>Lihat Detail</a> &nbsp; 
        </center
        
        </td>
        </tr>";
        $no++;
        }

?>
</table>

<br>

<center> 
<input type="button" onclick="location.href='http://handy.orange.com/crud/index.php';" value="Back" />

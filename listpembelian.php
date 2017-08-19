<?php include 'connect.php';
?>
<script type="text/javascript">
    function searchUser(){
        var input, filter, table, tr, td, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        table = document.getElementById("mytable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++){
            td = tr[i].getElementsByTagName("td")[1];
            if (td){
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                } else{
                tr[i].style.display = "none";
                }
            }       
        }

    }

</script>

<center> 
MENAMPILKAN DATA PEMBELIAN SETIAP USER 
<br>
<br>
<br>
<input type="search" id="mySearch" placeholder="Search By Username" oninput="searchUser();">
<br>
<br>
<table id="mytable" align="center" border='1' Width='800'>  

<tr>
    
    <th> ID User </th>
    <th> Username</th>
    <th> Total Belanja </th>
    <th> Action </th>
    
</tr>


<?php  
$queri="SELECT list_pembelian.id_pembelian, list_pembelian.id_user, username.nama, list_pembelian.tanggal, SUM(jumlah) AS jml
        FROM list_pembelian INNER JOIN username ON list_pembelian.id_user = username.id
        GROUP BY username.nama ORDER BY list_pembelian.tanggal ASC";

$hasil=mysqli_query($konek,$queri);    
$no = 1;

while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
 echo " <tr>      
        <td><center>".$row['id_user']."</td>
        <td><center>".$row['nama']."</td>
        <td align ='center'>".$row['jml']."</td>
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
<input type="button" onclick="location.href='http://handy.orange.com/crud/index.php';" value="Back" />

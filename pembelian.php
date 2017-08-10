<?php include 'connect.php';
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="">
  <br><br>
  <?php
  for ($i = 1; $i <= 3; $i++) {
    echo 'test: <input type="select" name="test" value="">';
}
  
  ?>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>



<br>
<br>

<table  border='1' Width='400'>  
<tr>
    <th> Nomor </th>
    <th> Nama Barang </th>
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
        <td>".$row['harga']."</td>
       
        
        </tr>";
        $no++;
        }

?>
</table>

<br>
<br>

<center> 

<button><a href="http://handy.orange.com/crud/index.php">Back</a></button>
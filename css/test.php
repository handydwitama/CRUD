<?php 

	function getName($nama){
		echo "Welcome ".$nama;
	}

	$nm = $_POST['name'];
	echo "<form method='POST' action='http://handy.orange.com/crud/css/test.php'> 
		<input type='text' name='name'></input>
		<input type='submit' name='submit' value='test'></input>
		</form>
		<br>

	";

	getName($nm);

	$numbers = array("qila" =>" 6", "salsa"=>"2");
	asort($numbers);
	foreach ($numbers as $key => $value) {
		echo $key." ".$value." <br> ";
	}
	foreach ($_SERVER as $a => $b) {
		echo $a." = ".$b."<br>";
	}
	
?>
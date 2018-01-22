<!DOCTYPE html>
<html>
<body>
<?php
   include_once("dp.php");
    if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$party = $_POST['party_size'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$spins = $_POST['spins'];
	
	$result = mysql_query("INSERT INTO booking(name,phone,party_size,date,time,spcl_inst) VALUES('$name','$phone','$party','$date','$time','$spins')");
	echo "Data is added successfully.";
	}
	else 
	{
	 echo "Something went wrong!!!";
	 }
	
?>
</body>
<a href="index.html">Back To Site</a>
</html>
<?php 

include_once('dp.php');

$username = $_POST['user'];
$password = $_POST['pass'];

$sql ="select * from users where username='$password' AND username='$username'";

$result = execute_query($sql);

$logincheck=mysqli_num_rows($result);

if($logincheck==1)
{
	header("location:dashboard.php");
}
else
{
	echo 'Invalid Password';
}


 ?>
<?php 

include_once('dp.php');
$user_id = $_GET['user_id'];

$sql = "delete from users where user_id ='$user_id'";

$result = execute_query($sql);

if($result)
{
	echo 'Record Deleted Sucessfully';
}
else
{
	echo 'Records have not been deleted';
}

 ?>

 <a href="users.php">Back to Users Page</a>
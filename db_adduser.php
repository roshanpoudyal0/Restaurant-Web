<?php 

include_once('dp.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "insert into users
		(user_id,username,password,email)
		VALUES
		('','$username','$password','$email')";

$result = execute_query($sql);

if($result)
{
	echo 'record inserted sucessfully';
}

else
{
	echo 'Failed to insert record';
}

 ?>
 <a href="users.php">Back to Users</a>
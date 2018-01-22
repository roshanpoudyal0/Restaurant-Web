<?php 

include_once('dp.php');

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "update users set
		username = '$username',
		password = '$password',
		email = '$email'
		where user_id = '$user_id'";

		$res =  execute_query($sql);


		if($res)
		{
			echo 'record updated sucessfully';
		}
		else
		{
			echo 'record failed to update';
		}

 ?>
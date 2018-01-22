<?php 

include_once('dp.php');

$menu_id = $_POST['menu_id'];
$menu_name = $_POST['menu_name'];
$menu_des = $_POST['menu_des'];

$sql = "update menu set
		menu_name='$menu_name',
		menu_des = '$menu_des'
		where menu_id='$menu_id'
		";

		$result = execute_query($sql);

		if($result)
		{
			header("location: menus.php");
		}

		else
		{
			echo 'record failed to uodate';
		}


?>
<a href="menus.php">back to Menu</a>
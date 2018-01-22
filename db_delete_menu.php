<?php 

include_once('dp.php');

$menu_id = $_GET['menu_id'];

$sql  = "delete from menu where menu_id='$menu_id'";

$result = execute_query($sql);

if($result)
{
	header("location: menus.php");
}
else
{
	echo "Delete Unsucessful";
}

 ?>
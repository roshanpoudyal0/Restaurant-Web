<?php 

include_once('dp.php');

$menu_name = $_POST['menu_name'];
$menu_des = $_POST['menu_des'];



$sql = "insert into menu
		(menu_id,menu_name,menu_des)
		VALUES
		('','$menu_name','$menu_des')
		";

$result = execute_query($sql);

if($result)
{
	echo "Record Inserted Sucessfully";
}
else
{
	echo "Recrod Failed to insert";
}
?>
<a href="menus.php">Back to Menu</a>
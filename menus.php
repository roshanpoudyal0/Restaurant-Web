<?php include_once('dp.php'); ?>
<table border="1">
	
	<?php 

	$sql = "select * from menu";

	$result = execute_query($sql);

	$c=1;

	while($data = mysqli_fetch_assoc($result))
		{?>

	<tr>
		<td><?php echo $c++; ?></td>
		<td><?php echo $data['menu_name']; ?></td>
		<td><?php echo $data['menu_des']; ?></td>
		<td><?php echo '<a href="update_menu.php?menu_id='.$data['menu_id'].'">Edit</a>';?></td>
        <td><?php echo '<a href="db_delete_menu.php?menu_id= '.$data['menu_id'].'">Delete</a>';?></td>
	</tr>
	<?php
	} ?>


</table>
<a href="add_menu.php">Add Menu</a>
<?php include_once('dp.php');

$menu_id = $_GET['menu_id'];

$sql = "select * from menu where menu_id='$menu_id'";

$result = execute_query($sql);

$data = mysqli_fetch_assoc($result);

?>
<form action="db_update_menu.php" method="POST" accept-charset="utf-8">
	<input type="hidden" name="menu_id" value="<?php echo $data['menu_id']; ?>">
	Menu Name: <input type="text" name="menu_name" value="<?php echo $data['menu_name']; ?>"><br>
	Menu Discription : <textarea name="menu_des"><?php echo $data['menu_des']; ?></textarea>
	<input type="submit" value="submit" name="submit">

</form>
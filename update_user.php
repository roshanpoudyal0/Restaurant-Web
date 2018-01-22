<?php include_once('dp.php');

$user_id = $_GET['user_id'];

$sql = "select * from users where user_id='$user_id'";

$result = execute_query($sql);

$data = mysqli_fetch_assoc($result);

?>
<form action="db_update_user.php" method="POST" accept-charset="utf-8">
	<input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
	Username : <input type="text" name="username" value="<?php echo $data['username']; ?>"><br>
	Password : <input type="password" name="password"><br>
	Email : <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
	<input type="submit" value="submit" name="submit">

</form>

    <table border="1" width="500px">

            <?php

            include_once('dp.php');

            $c = 1;
            $sql = "select * from users";

            $res = execute_query($sql);

            while($data = mysqli_fetch_assoc($res))
            { 
                ?> <tr>
                <td><?php echo $c++; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo '<a href="update_user.php?user_id='.$data['user_id'].'">Edit</a>';?></td>
                <td><?php echo '<a href="db_delete_user.php?user_id= '.$data['user_id'].'">Delete</a>';?></td>
            </tr>
            <?php 
        }
        ?>
        <a href="dashboard.php">back to Homepage</a><br>
        <a href="adduser.php">Add New User</a>

    </table>





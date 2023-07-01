<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
    <head> 
        <title>Homepage</title>
    </head>
    <body>
        <a href="add.php"> Add New User</a><br/><br/>
        <table width='80%' border="1">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Update</th>
            </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['mobile']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
        </table>
    </body>
</html>
<?php
include_once("config.php");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    //update user data
    $result = mysqli_query($mysqli, "UPDATE users SET nama='$name', email='$email', mobile='$mobile' WHERE id=$id");
    header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result)){
    $name = $user_data['nama'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>

<html>
    <head>
        <title>Add Users</title>
    </head>
    <body>
        <a href="index.php">Home</a><br/><br/>
        <form action="edit.php" method="post" name="update_user">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value=<<?php echo $name;?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<<?php echo $email;?>></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value=<<?php echo $mobile;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
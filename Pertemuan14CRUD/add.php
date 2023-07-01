<html>
    <head>
        <title>Add Users</title>
    </head>
    <body>
        <a href="index.php">Home</a><br/><br/>
        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['Submit'])){
            $name = $_POST['nama'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            include_once("config.php");
            $result = mysqli_query($mysqli, "INSERT INTO users (`nama`, `email`, `mobile`) VALUES ('$name', '$email', '$mobile')");
            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
        ?>
    </body>
</html>

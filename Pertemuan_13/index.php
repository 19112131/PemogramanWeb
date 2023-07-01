<html>
    <head>
        <title>Login Dengan PHP MySQLi</title>
    </head>
    <body>
        <h3>Form Login</h3>
        <!-- notifikasi -->
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Logout Succesfully! Bye Biatch:)";
            }
            else if($_GET['pesan'] == "belum login"){
                echo "Need Login to Access Admin Page, Bruh!";
            }
        }
        ?>
        <br/>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" place holder="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" place holder="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
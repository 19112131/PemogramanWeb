<html>
    <head>
        <title>Login dengan PHP MySQLi - Page Admin</title>
    </head>
    <body>
        <h2>Halaman Admin</h2>
        <!-- cek apakah sdh login-->
        <?php
            session_start();
            if($_SESSION['status'] !="login"){
                header("location:../index.php?pesan=belum_login");
            }
        ?>
        <h4>Welcome My Friend, <?php echo $_SESSION['username']; ?>! you're logged.</h4>
        <br/>
        <a href="logout.php">LOGOUT</a>
    </body>
</html>
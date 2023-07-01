<?php
    session_start();
    include 'koneksi.php';

    //tangkap data yg dikirim dari form login
    $username = $_POST['username'];
    $pw = $_POST['password'];

    // seleksi data pada tabel admin dari username dan pw
    $data = mysqli_query($koneksi, "SELECT * FROM bljr_login | WHERE username ='$username' and password='$pw'");

    // itung jumlah data yg ketemu
    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>
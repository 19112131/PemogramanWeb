<?php
include("config.php");

//cek apakah tombol daftar sudah diklik ato belum?
if(isset($_POST['add'])){
    //data dari formulir
    $event = $_POST['event'];
    $cat = $_POST['seat'];

    //query
    $sql = "INSERT INTO pilih_tiket (event, seat) VALUES ('$event', '$cat')";
    $query = mysqli_query($conn, $sql);

    //make sure query tersimpan
    if($query){
        //kalo berhasil, balik ke home
        header('Location: tiket.php?status=sukses');
    } else {
        header('Location: tiket.php?status=gagal');
    }
} else {
    die("Access Denied...");
}
?>
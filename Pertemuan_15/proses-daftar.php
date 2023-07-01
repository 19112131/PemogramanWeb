<?php
include("config.php");

//cek apakah tombol daftar sudah diklik ato belum?
if(isset($_POST['daftar'])){
    //data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jns_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jns_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    //make sure query tersimpan
    if($query){
        //kalo berhasil, balik ke home
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Access Denied...");
}
?>
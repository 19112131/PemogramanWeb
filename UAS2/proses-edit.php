<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum? 
if (isset ($_POST['save'] ) ){
// archil data dari formulir
	$id = $_POST['id_tkt'];
	$event = $_POST['event'];
	$cat = $_POST['cat'];

	// buat query update
	$sql = "UPDATE pilih_tiket SET event='$event', cat='$cat' WHERE id=$id"; 
	$query = mysqli_query($conn, $sql);
	// apakah query update berhasil? 
	if( $query ) {
// kalau berhasil alihkan ke halaman list-siswa.php 
		header('Location: tiket.php');
	} else {
	// kalau gagal tarcpilkan pesan 
		die("Gagal menyimpan perubahan...");
	}
} else {
	die("Access Denied..."); 
}
?>
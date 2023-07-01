<?php
include("config.php");
if( isset($_GET['id_tkt'])  ){
	// ambil id dari query string 
	$id = $_GET['id_tkt'];
	// buat query hapus
	$sql = "DELETE FROM pilih_tiket WHERE id_tkt=$id";
	$query = mysqli_query($conn, $sql);
	// apakah query hapus berhasil? 
	if( $query ){
		header('Location: tiket.php'); 
	} else {
		die("gagal menghapus...");
	}
} else {
	die("Access Denied..."); 
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gigsvibe";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>

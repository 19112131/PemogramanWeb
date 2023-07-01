<?php
include("config.php");
// kalau tidak ada id di query string 
if ( !isset($_GET['id']) ){
	header('Location: tiket.php'); 
}
//ambil id dari query string 
$id = $_GET['id_tkt'];
// buat query untuk ambil data dari database 
$sql = "SELECT * FROM pilih_tiket WHERE id_tkt=$id"; 
$query = mysqli_query($conn, $sql);
$tiket = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan 
if( mysqli_num_rows ($query) < 1 ){
	die("data tidak ditemukan..."); 
}
?>

<!DOCTYPE html>
<html> 
<head>
	<title>Edit Your Choosen</title> 
</head>
<body>
	<header>
		<h3>Edit Ticket Choosen</h3> 
	</header>
	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $tiket['id_tkt'] ?>" />
		<p>
			<label for="event">Event: </label> 
			<?php $event = $tiket['event']; ?>
			<select name="event">
				<option <?php echo ($event == 'Taylor Swift, The Eras Tour') ? "selected": "" ?>>Taylor Swift, The Eras Tour</option>
				<option <?php echo ($event == 'Coldplay, Music of Spheres') ? "selected": "" ?>>Coldplay, Music of Spheres</option>
				<option <?php echo ($event == 'Niki, High School Tour') ? "selected": "" ?>>Niki, High School Tour</option> 
				<option <?php echo ($event == 'The 1975, Asia Music Weekend') ? "selected": "" ?>>The 1975, Asia Music Weekend</option> 
				<option <?php echo ($event == 'Cigarettes After Sex, Remember Tour') ? "selected": "" ?>>Cigarettes After Sex, Remember Tour</option>
			</select>
		</p>
		<p>
			<label for="cat">Seat: </label> 
			<?php $cat = $tiket['seat']; ?>
			<select name="cat">
				<option <?php echo ($cat == 'Cat 1') ? "selected": "" ?>>Cat 1</option>
				<option <?php echo ($cat == 'Cat 2') ? "selected": "" ?>>Cat 2</option>
				<option <?php echo ($cat == 'Cat 3') ? "selected": "" ?>>Cat 3</option> 
				<option <?php echo ($cat == 'Cat 4') ? "selected": "" ?>>Cat 4</option> 
				<option <?php echo ($cat == 'VIP 1') ? "selected": "" ?>>VIP 1</option>
				<option <?php echo ($cat == 'VIP 2') ? "selected": "" ?>>VIP 2</option>
			</select>
		</p>
		<P>
			<input type="submit" value="Save" name="save" />
		</p>
		</fieldset>
	</form>
	</body>
</html>

<?php include("config.php"); ?> 
<!DOCTYPE html>
<html> 
<head>
	<title>Ticketing</title> 
	<style>
		body {
			font-family: 'poppins', sans-serif;
			font-weight: bold;
			background-color: #f4f4f4;
			margin: 0;
			padding: 20px;
			font-style: normal;
            line-height: normal;
		}

		header {
			text-align: center;
			margin-bottom: 20px;
		}

		h1 {
			color: #333;
			font-size: 48px;
		}

		nav {
			margin-bottom: 20px;
		}

		a {
			display: inline-block;
			padding: 5px 10px;
			background-color: #1B0027;
			color: white;
			text-decoration: none;
			border-radius: 10px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 8px;
		}

		th {
			background-color: #f2f2f2;
		}

		tbody tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tbody tr:hover {
			background-color: #ddd;
		}

		.form-container {
			margin-bottom: 20px;
		}

		.form-container input[type=text] {
			width: 200px;
			padding: 5px;
			border-radius: 3px;
		}

		.form-container label {
			display: block;
			margin-bottom: 5px;
		}

		.payment-methods label {
			margin-right: 10px;
		}

		.payment-methods input[type=radio] {
			margin-right: 5px;
		}

		.payment-methods label:last-child {
			margin-right: 0;
		}

		.payment-methods br {
			margin-bottom: 10px;
		}

		.payment-button {
			text-align: center;
		}

		.payment-button a {
			display: inline-block;
			padding: 10px 20px;
			background-color: #1B0027;
			color: white;
			text-decoration: none;
			border-radius: 10px;
		}

		.payment-button a:hover {
			background-color: #8968B2;
		}
	</style>
</head>
<body>
	<header>
		<h1>Checkout Your Ticket</h1> 
	</header>
	<nav>
		<a href="tambah-tiket.php">[+] Tambah Tiket</a> 
	</nav>
	<br>
	<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Event</th> 
			<th>Seat</th> 
			<th>Tindakan</th>
	</tr> 
	</thead>
 	<tbody> 
		<?php
		$sql = "SELECT * FROM pilih_tiket"; 
		$query = mysqli_query($conn, $sql);
		
		while($tiket = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$tiket['id']."</td>";
			echo "<td>".$tiket['event']."</td>";
			echo "<td>".$tiket['seat']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$tiket['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$tiket['id']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>"; 
		}
		?>
	</tbody> 
	</table>
	<?php if(isset($_GET['status'])): ?> 
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Penambahan tiket Berhasil!"; 
			} else {
				echo "Penambahan tiket gagal!"; 
			}
		?>
	</p>
	<?php endif; ?>
	<p>Total : <?php echo mysqli_num_rows($query) ?></p> 
	<!-- methodpost; -->
	<h2>Informasi Tambahan</h2>
	<div class="form-container">
		<label>Email:</label>
		<input type="text" name="email" placeholder="Email" />
	</div>
	<div class="form-container payment-methods">
		<label>Metode Pembayaran:</label>
		<label><input type="radio" name="metode" value="Transfer Bank"> Transfer Bank</label>
		<label><input type="radio" name="metode" value="E-wallet"> E-wallet</label>
		<label><input type="radio" name="metode" value="Kartu Kredit"> Kartu Kredit</label>
	</div>
	<div class="payment-button">
		<a href="done.php">Bayar</a>
	</div>
</body>
</html>

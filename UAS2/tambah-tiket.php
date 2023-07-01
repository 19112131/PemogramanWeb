<!DOCTYPE html>
<html> 
<head>
	<title>Add Ticket</title> 
	<style>
		body {
			font-family: 'poppins', sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 20px;
		}

		header {
			text-align: center;
			margin-bottom: 20px;
		}

		h2 {
			color: #333;
			font-size: 30px;
			font-weight: bold;
		}

		form {
			max-width: 400px;
			margin: 0 auto;
		}

		fieldset {
			border: none;
			padding: 0;
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #777;
		}

		select, input[type="submit"] {
			width: 100%;
			padding: 10px;
			border-radius: 15px;
			border: 1px solid #ddd;
			font-size: 16px;
			color: #333;
		}

		input[type="submit"] {
			background-color: #1B0027;
			color: white;
			border: none;
			cursor: pointer;
			margin-top: 10px;
		}

		input[type="submit"]:hover {
			background-color: #8968B2;
		}
	</style>
</head>
<body>
	<header>
		<h2>Add Your Ticket</h2>
	</header>
	<form action="proses-tambah.php" method="POST"> 
		<fieldset>
		<p>
			<label for="cat">Seat: </label>
			<select name="cat">
				<option>Cat 1</option> 
				<option>Cat 2</option> 
				<option>Cat 3</option> 
				<option>Cat 4</option> 
				<option>VIP 1</option>
				<option>VIP 2</option>
			</select>
		</p> 
		<p>
			<label for="event">Event: </label>
			<select name="event">
				<option>Taylor Swift, The Eras Tour</option> 
				<option>Coldplay, Music of Spheres</option> 
				<option>Niki, High School Tour</option> 
				<option>The 1975, Asia Music Weekend</option> 
				<option>Cigarettes After Sex, Remember Tour</option>
			</select>
		</p>
		<P>
			<input type="submit" value="Add" name="add" />
		</p>
		</fieldset> 
	</form> 
</body>
</html>

<!DOCTYPE html>
<html> 
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title> 
</head>
<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>
	<form action="proses-daftar.php" method="POST"> 
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<P>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jns_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jns_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jns_kelamin" value="perempuan"> Perempuan</label>
		</p> 
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option> 
				<option>Kristen</option> 
				<option>Hindu</option> 
				<option>Budha</option> 
				<option>Atheis</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
		</p>
		<P>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset> 
	</form> 
	</body>
</html>
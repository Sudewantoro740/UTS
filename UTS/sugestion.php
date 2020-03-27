<!DOCTYPE html>
<html>
<head>
	<title>CangSurabaya</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="navbar">
	<a href="home.php">Home</a>
	<div class="dropdown">
		<button class="dropbtn" onclick="window.location.href = 'place.php';">Place</button>
		<div class="dropdown-content">
			<a href="sbypusat.php">Surabaya Pusat</a>
			<a href="sbyutara.php">Surabaya Utara</a>
			<a href="sbyselatan.php">Surabaya Selatan</a>
			<a href="sbybarat.php">Surabaya Barat</a>
			<a href="sbytimur.php">Surabaya Timur</a>
		</div>
	</div>
	<a class="active" href="sugestion.php">Sugestion</a>
</div>
<div class="sugestion">
	<h1><center>Saran Tempat</center></h1>
	<form method="POST" action="isitabel.php">
		<table width="500" align="center" cellpadding="5" cellspacing="10">
		<tr>
			<td>Nama Pengguna</td>
			<td> :</td>
			<td><input type="text" name="nama_pengguna"></input></td>
		</tr>
		<tr>
			<td>Nama Tempat</td>
			<td> :</td>
			<td><input type="text" name="nama_tempat"></input></td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td> :</td>
			<td>
				<select name="lokasi">
					<option></option>
					<option value="surabaya pusat">Surabaya Pusat</option>
					<option value="surabaya utara">Surabaya Utara</option>
					<option value="surabaya selatan">Surabaya Selatan</option>
					<option value="surabaya barat">Surabaya Barat</option>
					<option value="surabaya timur">Surabaya Timur</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat Tempat</td>
			<td> :</td>
			<td><textarea name="alamat" cols="25" rows="5"></textarea></td>
		</tr>
		<tr><br></tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</form>
</div>
</body>
</html>
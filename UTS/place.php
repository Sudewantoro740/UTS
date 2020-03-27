<!DOCTYPE html>
<html>
<head>
	<title>CangSurabaya</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="navbar">
	<a href="home.php">Home</a>
	<div class="dropdown active">
		<button class="dropbtn" onclick="window.location.href = 'place.php';">Place</button>
		<div class="dropdown-content">
			<a href="sbypusat.php">Surabaya Pusat</a>
			<a href="sbyutara.php">Surabaya Utara</a>
			<a href="sbyselatan.php">Surabaya Selatan</a>
			<a href="sbybarat.php">Surabaya Barat</a>
			<a href="sbytimur.php">Surabaya Timur</a>
		</div>
	</div>
	<a href="sugestion.php">Sugestion</a>
</div>
<div>
	<div class="header gambar">
		<a href="sbypusat.php" class="gerak">
			<img src="gambar/suoklat.png">
		</a>
		<a href="sbyutara.php" class="gerak">
			<img src="gambar/houseofsampoerna.jpg">
		</a>
		<a href="sbyselatan.php" class="gerak">
			<img src="gambar/rolag.jpg">
		</a>
		<a href="sbybarat.php" class="gerak">
			<img src="gambar/houseofpadmaning.jpg">
		</a>
		<a href="sbytimur.php" class="gerak">
			<img src="gambar/hutanbambu.jpg">
		</a>
	</div>
</div>
<script type="text/javascript">
	var myIndex = 0;
	tambah();

	function tambah() {
		var i;
		var x = document.getElementsByClassName("gerak");
		for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}
		x[myIndex-1].style.display = "block";
		setTimeout(tambah, 3000);
	}
</script>
</body>
</html>
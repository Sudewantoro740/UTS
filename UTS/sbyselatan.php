<!DOCTYPE html>
<html>
<head>
	<title>Surabaya Selatan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".hide").click(function(){
				$("#foto").hide("slow") });
			$(".show").click(function(){
				$("#foto").show("slow") });
		});
	</script>
	<style type="text/css">
		.foto img {
			width: 600px;
			height: 410px;
		}
	</style>
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
<div class="header">
	<center><h1>Rolag Cafe</h1></center><br>
	<div>
		<button class="hide"> SEMBUNYI </button>
		<button class="show"> TAMPILKAN </button>
		<p class="foto"><img id="foto" src="gambar/rolag.jpg"></p>
		</div>
	</div>
	<div class="sby">
		<p>
			Cafe yang satu ini sudah cukup dikenal kalangan anak muda yang doyan ngopi bareng dan menikmati live music.
		</p>
		<p>
			Saking ramainya pengunjung, Rolag Cafe sekarang tidak hanya ada di Jl. Karah No.6 kawasan Gunungsari, tapi juga buka cabang di Jl. Khairil Anwar 15-19, hingga di Jl. A. Yani 23-27 Sidoarjo.
		</p>
		<p>
			Sejak sore kafe ini sudah buka hingga tengah malam. Biasanya di Rolag Gunungsari ada hiburan live music pada hari-hari tertentu. Rolag Cafe didesain sebagai tempat nongkrong yang terbuka dan bersebelahan dengan sungai Kali Brantas.
		</p>
		<p>
			Semakin meriah, di bagian atap-atapnya banyak bertebaran lampu-lampu LED yang membuat suasana semakin romantis. Yang tak kalah penting adalah harga makanan yang ditawarkan di sini enggak bikin kantong jebol, mulai Rp5.000 hingga Rp30.000 per item.
		</p>
		<p>
			Sejumlah makanan yang bisa dinikmati kebanyakan snack seperti kentang goreng, tahu belog atau tahu bakso, dan batagor. Untuk makanan beratnya seperti lontong sate, dan spageti. Minuman favorit yang paling diburu di Rolag Cafe adalah kopi drip dam drip susu. Salah satu cara penyeduhan kopi dengan teknik Vietnam Drip atau tetes.
		</p>
		<p>
			Alamat : Jl. Khairil Anwar No.15-19, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241
			<br>
			<a href="https://www.google.com/maps/place/Rolag+Kopi+Prapanca/@-7.281551,112.7281703,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fbee8b6a6ff3:0x64015b8891edab11!8m2!3d-7.281551!4d112.730359?hl=id" style="color: white;">Klik disini</a>
		</p>
	</div>
</div>
</body>
</html>
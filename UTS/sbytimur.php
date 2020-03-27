<!DOCTYPE html>
<html>
<head>
	<title>Surabaya Timur</title>
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
	<center><h1>Hutan Bambu</h1></center><br>
	<div>
		<button class="hide"> SEMBUNYI </button>
		<button class="show"> TAMPILKAN </button>
		<p class="foto"><img id="foto" src="gambar/hutanbambu.jpg"></p>
		</div>
	</div>
	<div class="sby">
		<p>
			Hutan yang terletak di Jalan Raya Marina Asri, Keputih ini berada di kawasan 40 hektar yang terdiri dari tiga bagian. Bagian tersebut, diantaranya hutan bambu keputih, taman harmoni, dan taman ruang publik keputih.
		</p>
		<p>
			Spot di hutan bambu keputih, kini banyak dimanfaatkan oleh penduduk Surabaya, dan sekitarnya untuk didokumentasikan. Rerentetan bambu di sana mampu memberikan efek menyegarkan dan juga menenangkan pikiran.
		</p>
		<p>
			Namun, siapa sangka kalau hutan bambu ini ternyata dahulunya tempat pembuangan akhir (TPA) sejak 1970. Kemudian Pemerintah Kota (Pemkot) Surabaya menutup TPA tersebut sekitar 2000-2001, dan memindahkan ke daerah Benowo.
		</p>
		<p>
			Pemkot Surabaya pun menanam bibit bambu di bekas TPA tersebut, hingga akhirnya menjadi hutan bambu yang jadi spot foto menarik di Surabaya.
		</p>
		<p>
			Alamat : Jl. Raya Marina Asri, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111
			<br>
			<a href="https://www.google.com/maps/place/Hutan+Bambu/@-7.2994777,112.7717196,14z/data=!4m8!1m2!2m1!1sbambu+putih+surabaya!3m4!1s0x2dd7f900d37fae9b:0x637bddc13af0df47!8m2!3d-7.2940925!4d112.8023765?hl=id" style="color: white;">Klik disini</a>
		</p>
	</div>
</div>
</body>
</html>
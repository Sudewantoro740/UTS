<!DOCTYPE html>
<html>
<head>
	<title>Surabaya Utara</title>
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
	<center><h1>House of Sampoerna</h1></center><br>
	<div>
		<button class="hide"> SEMBUNYI </button>
		<button class="show"> TAMPILKAN </button>
		<p class="foto"><img id="foto" src="gambar/houseofsampoerna.jpg"></p>
		</div>
	</div>
	<div class="sby">
		<p>
			Terletak di kawasan “Surabaya lama”, gedung megah bergaya kolonial ini dibangun pada tahun 1858 dan sekarang menjadi situs bersejarah yang terus dilestarikan.
		</p>
		<p>
			Auditorium sentral bangunan ini yang difungsikan menjadi museum. Bagian timur gedung  difungsikan sebagai ruangan untuk kafe, kios merchandise dan galeri seni. Sedangkan, bangunan di sisi barat tetap menjadi rumah tinggal keluarga pemilik.
		</p>
		<p>
			Kunjungan ke Museum House of Sampoerna (HOS) menawarkan pengalaman yang benar-benar unik bagi pengunjung. Mulai dari cerita tentang keluarga pendiri, sampai melihat dari dekat proses pembuatan rokok linting yang masih dilakukan secara manual. Rokok yang di produksi di gedung ini adalah merek Dji Sam Soe.
		</p>
		<p>
			Di dalam museum kafe, pengunjung bisa membeli berbagai souvenir yang berkaitan dengan gedung Sampoerna ini, seperti: miniatur peralatan tongkat rokok tradisional, cengkeh, buku dan kemeja.
		</p>
		<p>
			Alamat : Taman Sampoerna No.6, Krembangan Utara, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60163
			<br>
			<a href="https://www.google.com/maps/place/House+of+Sampoerna/@-7.2308173,112.7320457,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7f92141061d7f:0x41a02b3a11736c5e!8m2!3d-7.2308173!4d112.7342344?hl=id" style="color: white;">Klik disini</a>
		</p>
	</div>
</div>
</body>
</html>
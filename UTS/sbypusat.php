<!DOCTYPE html>
<html>
<head>
	<title>Surabaya Pusat</title>
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
	<center><h1>Suoklat Cafe 3.0</h1></center><br>
	<div>
		<button class="hide"> SEMBUNYI </button>
		<button class="show"> TAMPILKAN </button>
		<p class="foto"><img id="foto" src="gambar/suoklat.png"></p>
		</div>
	</div>
	<div class="sby">
		<p>
			Mau nongkrong bareng sahabat ditemani camilan yang manis-manis? Di sini tempatnya, Suoklat Cafe, singkatan Suroboyo Coklat. Sesuai dengan namanya, kafe ini menyajikan menu-menu yang berbahan dasar cokelat. Dari olahan minuman, kue hingga ice cream di mix and match dengan cokelat.
		</p>
		<p>
			Kafenya buka sejak pukul 11.00 hingga pukul 23.00. Desain tempat nongkrong ini juga lebih homey dan sarat akan keakraban.
		</p>
		<p>
			Contoh menu-menu yang dapat kamu jumpai di Suoklat Cafe ini misalnya seperti chicken fillet teriyaki, beef creamy mushroom fettucini, crazy dark choco and chili cheese fries, pancake goal, waffle choco marsmallow, dan waffle red velvet.
		</p>
		<p>
			Untuk minuman dipastikan kamu bakal tergoda untuk menikmatinya, sebut saja menu minuman berjudul freaky snow white and death by brwonie, nutty nutella, hot coklat marsmallow, dan fruity freak strawberry. Harga-harga minuman dan makanan di Suoklat Cafe ini mulai Rp10.000 per item.
		</p>
		<p>
			Alamat : Jl. Genteng Besar No.83D, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275.
			<br>
			<a href="https://www.google.com/maps/place/Suoklat+Cafe+3.0/@-7.2677309,112.7394218,15z/data=!4m8!1m2!2m1!1sSuoklat+Cafe!3m4!1s0x2dd7f96789100001:0x3dada6a26b2b5dc6!8m2!3d-7.2587197!4d112.7392808" style="color: white;">Klik disini</a>
		</p>
	</div>		
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Surabaya Barat</title>
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
	<center><h1>House of Padmaning</h1></center><br>
	<div>
		<button class="hide"> SEMBUNYI </button>
		<button class="show"> TAMPILKAN </button>
		<p class="foto"><img id="foto" src="gambar/houseofpadmaning.jpg"></p>
		</div>
	</div>
	<div class="sby">
		<p>
			Tempat nongkrong yang juga jadi jujugan para mahasiswa ini berada di Jl Dukuh Kupang Barat, bersebelahan dengan Kantor Kelurahan Dukuh Pakis Surabaya. Padmaning juga cukup dikenal dengan kopi-kopi daerah seperti Mandailing, Toraja, Robusta yang diseduh dengan beragam teknik mulai dari Vietnam Drip hingga V60.
		</p>
		<p>
			Suasana di Padmaning cenderung lebih tenang, hanya alunan musik sebagai hiburan. Tempat ini cocok untuk nongkrong, belajar kelompok ataupun bertemu mitra bisnis. Desain cafe ini lebih banyak mengusung sesuatu yang berbau seni dan bercirikan akses Bali da Yogyakarta, misalnya dari kursi dan meja dari akar kayu, patung semar monggo mampir sampai dokar.
		</p>
		<p>
			Makanan dan minuman di sini lebih beragam, ada roti canai, mie omelan mantan (mie bihun), mie manan jamuren (mie goreng jamur), nasi goreng selimut mantan, sosis Solo (risoles isi daging ayam), dan gorengan garing (biskuit goreng). Untuk minuman bisa dijumpai beragam olahan minuman cokelat, kopi, sirup, leci, dan susu.
		</p>
		<p>
			Harga yang ditawarkan di Padmaning cukup mencengangkan, mulai dari Rp5.000 sampai Rp20.000 per item. Sebut saja mie omelan mantan atau mie bihun dihargai hanya Rp15.000.
		</p>
		<p>
			Alamat : Jl. Alas Malang No.221a, Made, Kec. Sambikerep, Kota SBY, Jawa Timur 60219
			<br>
			<a href="https://www.google.com/maps/place/House+Of+Padmaning/@-7.2691314,112.6351218,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fc0ec6b5a2eb:0xd332edc3ad0bfb2b!8m2!3d-7.2691314!4d112.6373105?hl=id" style="color: white;">Klik disini</a>
		</p>
	</div>
</div>
</body>
</html>
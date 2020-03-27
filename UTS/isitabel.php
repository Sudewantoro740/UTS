<?php
include("koneksi.php");
$nama_pengguna = $_POST['nama_pengguna'];
$nama_tempat = $_POST['nama_tempat'];
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamat'];
$sql = "INSERT INTO sugestion(nama_pengguna,nama_tempat,lokasi,alamat) values ('$nama_pengguna','$nama_tempat','$lokasi','$alamat')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:sugestion.php');
?>
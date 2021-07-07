<?php 
$koneksi= new mysqli("localhost", "root", "", "");
$buat= "CREATE DATABASE perpustakaan";
$cek=$koneksi->query($buat);
if ($cek) {
	echo "database berhasil dibuat";
}

else{
	echo "database gagal dibuat";
}

 ?>
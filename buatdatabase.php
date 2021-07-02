<?php 
$koneksi=new mysqli("localhost", "root", "", "");
$buat= "CREATE DATABASE layanangizi";
$q=$koneksi->query($buat);
if ($q) {
	echo "DATABASE berhasil dibuat";
}

else{
	echo "DATABASE gagal dibuat";
}


 ?>
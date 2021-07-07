<?php 
require 'fungsi.php';
$buat= "CREATE TABLE `perpustakaan`.`pustakawan`(`kodepustakawan` varchar(10) NOT NULL,
 `namapustakawan` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
   `notelepon` varchar(15) NOT NULL,
    PRIMARY KEY (`kodepustakawan`)) ENGINE=InnoDB;";


$cek=$koneksi->query($buat);
if ($cek) {
	echo "table berhasil dibuat";
	echo"<br>";
}
else{
	echo "table gagal dibuat";
	echo"<br>";
}


$buat1="CREATE TABLE `perpustakaan`.`pustaka`(`kodepustaka`  varchar(10) NOT NULL, 
`judulpustaka` varchar(100) NOT NULL,
 `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL, 
  `tahunterbit` varchar(10) NOT NULL,
   PRIMARY KEY (`kodepustaka`)) ENGINE=InnoDB;";

$cek1=$koneksi->query($buat1);
if ($cek1) {
	echo "table berhasil dibuat";
	echo"<br>";
}
else{
	echo "table gagal dibuat";
	echo"<br>";
}

$buat2="CREATE TABLE `perpustakaan`.`anggota`(`nomoranggota` varchar(10) NOT NULL,
 `namaanggota` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL, 
  `tanggaldaftar` varchar(15) NOT NULL, 
  `tanggalkadaluarsa` varchar(15) NOT NULL,
   PRIMARY KEY(`nomoranggota`)) ENGINE=InnoDB;";
$cek2=$koneksi->query($buat2);
if ($cek2) {
	echo "table berhasil dibuat";
	echo"<br>";
}
else{
	echo "table gagal dibuat";
	echo"<br>";
}
$buat3="CREATE TABLE `perpustakaan`.`transaksi`(`idtransaksi` int(11) NOT NULL AUTO_INCREMENT, 
`kodepustaka` varchar(10) NOT NULL, 
`nomoranggota`varchar(10) NOT NULL , 
`kodepustakawanpinjam` varchar(10) NOT NULL,
`tanggalpinjam` varchar(10) NOT NULL,
`kodepustakawankembali` varchar(10) NOT NULL, 
`tanggalkembali` varchar(15) NOT NULL, 
PRIMARY KEY(`idtransaksi`)) ENGINE=InnoDB;";

$cek3=$koneksi->query($buat3);
if ($cek3) {
	echo "table berhasil dibuat";
}
else{
	echo "table gagal dibuat";
}


 ?>
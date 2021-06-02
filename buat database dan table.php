<?php 

$koneksi= new mysqli("localhost", "root", "", "");
$sql= "CREATE DATABASE kendaraan";
$q=$koneksi->query($sql);
if ($q) {
	echo "database berhasil dibuat";
}

else{
	echo "database gagal dibuat";

}
$sql1= "CREATE TABLE `kendaraan`.`kendaraan` ( `id` INT NOT NULL AUTO_INCREMENT , `nomer_mesin` VARCHAR(100) NOT NULL , `nomer_rangka` VARCHAR(100) NOT NULL , `jenis_kendaraan` VARCHAR(100) NOT NULL , `nama_kendaraan` VARCHAR(100) NOT NULL , `tanggal` DATE NOT NULL , `nomer_BPKB` VARCHAR(100) NULL , `nomer_STNK` VARCHAR(100) NULL , `status_STNK` VARCHAR(100) NOT NULL , `kondisi` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"; 

$q1=$koneksi->query($sql1);

if ($q1) { 
	echo "<br>";
	echo "table berhasil dibuat";
}
else{
echo "<br>";
	echo "table gagal dibuat";
}


 ?>


 <?php 
/*
halaman ini dibuat oleh yoga muhamad aryanto,
tanggal 31 mei sampai 1 mei 2021.!!!!

 */

 ?>






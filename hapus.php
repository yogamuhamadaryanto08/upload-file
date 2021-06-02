<?php 
function hapus($ab)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE  FROM kendaraan WHERE id=$ab");
	return mysqli_affected_rows($koneksi); 

}





$ab=$_GET['id'];
$koneksi= new mysqli("localhost", "root", "", "kendaraan");/* baris ini untuk menghubungkan kedatabase */




if (hapus($ab) > 0) {
	echo "<script> alert(' data BERHASIL dihapus');
	document.location.href = 'daftar kendaraan dan cari.php';
	</script>";

}

else{
	echo "<script> alert(' data GAGAL dihapus');
	document.location.href = 'daftar kendaraan dan cari.php';
	</script>";
	
}
?>

<?php 
/*
halaman ini dibuat oleh yoga muhamad aryanto,
tanggal 31 mei sampai 1 mei 2021.!!!!

 */

 ?>

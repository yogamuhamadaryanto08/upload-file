<?php 
require 'fungsi.php';

if (isset($_GET['no'])) {
	$a=$_GET['no'];
	if (hapus($a)>0) {
		echo "<script>
			alert('berhasil dihapus');
			document.location.href='anggota/anggota.php';
		</script>";
	}
	else{
		echo "<script>
			alert('gagal dihapus');
			document.location.href='anggota/anggota.php';
		</script>";
	}
}

if (isset($_GET['no1'])) {
	$b=$_GET['no1'];
	if (hapus1($b)>0) {
		echo "<script>
			alert('berhasil dihapus');
			document.location.href='pustaka/pustaka.php';
		</script>";
	}
	else{
		echo "<script>
			alert('gagal dihapus');
			document.location.href='pustaka/pustaka.php';
		</script>";
	}
}

if (isset($_GET['no2'])) {
	$c=$_GET['no2'];
	if (hapus2($c)>0) {
		echo "<script>
			alert('berhasil dihapus');
			document.location.href='pustakawan/pustakawan.php';
		</script>";
	}
	else{
		echo "<script>
			alert('gagal dihapus');
			document.location.href='pustakawan/pustakawan.php';
		</script>";
	}
}
if (isset($_GET['no3'])) {
	$d=$_GET['no3'];
	if (hapus3($d)>0) {
		echo "<script>
			alert('berhasil dihapus');
			document.location.href='transaksi/transaksi.php';
		</script>";
	}
	else{
		echo "<script>
			alert('gagal dihapus');
			document.location.href='transaksi/transaksi.php';
		</script>";
	}
}
 ?>
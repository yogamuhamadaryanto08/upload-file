<?php 
$koneksi= new mysqli("localhost", "root", "", "perpustakaan");
$anggota= mysqli_query($koneksi,"SELECT * FROM anggota");
$pustaka= mysqli_query($koneksi,"SELECT * FROM pustaka");
$pustakawan= mysqli_query($koneksi,"SELECT * FROM pustakawan");
$transaksi= mysqli_query($koneksi,"SELECT * FROM transaksi");

function tambah()
{

	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	global $koneksi;
	$tam="INSERT INTO anggota VALUES ('$a','$b','$c','$d','$e');";
	$cek=$koneksi->query($tam);
	return mysqli_affected_rows($koneksi);
}

function ubah()
{
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	global $koneksi;
	$ta="UPDATE anggota SET nomoranggota='$a', namaanggota='$b', alamat='$c',tanggaldaftar='$d',tanggalkadaluarsa='$e' WHERE nomoranggota='$a'";
	$cek=$koneksi->query($ta);
	return mysqli_affected_rows($koneksi);
}


function hapus($a)
{
	global $koneksi;
	mysqli_query($koneksi," DELETE FROM anggota WHERE nomoranggota='$a'");
	return mysqli_affected_rows($koneksi);
}

function tambah1()
{
 	global $koneksi;
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	$t="INSERT INTO pustaka VALUES ('$a','$b','$c','$d','$e');";
	$cek=$koneksi->query($t);
	return mysqli_affected_rows($koneksi);
}
function ubah1()
{
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	global $koneksi;
	$ta="UPDATE pustaka SET kodepustaka='$a', judulpustaka='$b', pengarang='$c',penerbit='$d',tahunterbit='$e' WHERE kodepustaka='$a'";
	$cek=$koneksi->query($ta);
	return mysqli_affected_rows($koneksi);
}

function hapus1($b)
{
	global $koneksi;
	mysqli_query($koneksi," DELETE FROM  pustaka WHERE kodepustaka='$b'");
	return mysqli_affected_rows($koneksi);
}

function tambah2()
{
 	global $koneksi;
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$r=password_hash($c, PASSWORD_DEFAULT);
	$n="INSERT INTO pustakawan VALUES ('$a','$b','$r','$d');";
	$cek=$koneksi->query($n);
	return mysqli_affected_rows($koneksi);
}

function ubah2()
{
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$r=password_hash($c, PASSWORD_DEFAULT);
	global $koneksi;
	$ta="UPDATE pustakawan SET kodepustakawan='$a', namapustakawan='$b', password='$r',notelepon='$d' WHERE kodepustakawan='$a'";
	$cek=$koneksi->query($ta);
	return mysqli_affected_rows($koneksi);
}

function hapus2($c)
{
	global $koneksi;
	mysqli_query($koneksi," DELETE FROM  pustakawan WHERE kodepustakawan='$c'");
	return mysqli_affected_rows($koneksi);
}


function tambah3()
{
 	global $koneksi;
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	$f= htmlspecialchars($_POST['f']);
	$nn="INSERT INTO transaksi VALUES ('','$a','$b','$c','$d','$e','$f');";
	$cek=$koneksi->query($nn);
	return mysqli_affected_rows($koneksi);
}
function hapus3($d)
{
	global $koneksi;
	mysqli_query($koneksi," DELETE FROM  transaksi WHERE idtransaksi='$d'");
	return mysqli_affected_rows($koneksi);
}




function ubah3()
{
 	global $koneksi;
 	$k=htmlspecialchars($_POST['t']);
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	$f= htmlspecialchars($_POST['f']);
	$nn="UPDATE transaksi SET idtransaksi='$k',kodepustaka='$a', nomoranggota='$b', kodepustakawanpinjam='$c', tanggalpinjam='$d',kodepustakawankembali='$e',tanggalkembali='$f' WHERE idtransaksi='$k'";
	$cek=$koneksi->query($nn);
	return mysqli_affected_rows($koneksi);
}
 ?>
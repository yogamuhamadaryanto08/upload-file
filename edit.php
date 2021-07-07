<?php 
require '../fungsi.php';
$no=$_GET['no'];
$cek= mysqli_query($koneksi,"SELECT * FROM anggota WHERE nomoranggota='$no'");


 if (isset($_POST['kirim'])) {
if (ubah($_POST)>0) {
	echo "<script>
			alert('berhasil dirubah');
			document.location.href='anggota.php';
		</script>";
}
else{
		echo "<script>
			alert('gagal dirubah');
			document.location.href='anggota.php';
		</script>";
}
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
*{
  padding: 0;
  margin: 0;
}

 		table{
 			background-color: blue;
 		}


body{
	background-color: silver;
}


.p{

        position: fixed;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: green;
        color: white;
        text-align: center;
        font-style: italic;
      }

      .y{
      	background-color: skyblue;
      	color: red;
      	font-style: italic;
      }

button.a,button.b{
	background-color: black;
	color: white;
}
   .t{
      	position: fixed;
      	left: 0;
      	bottom: 3%;
      }

      a{
      	text-decoration: none;
      	color: white;
      }
td{
  color: white;
}

 	</style>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


 </head>
 <body>
 	 <div class="t"><button class="a"><a href="anggota.php">Kembali</a></button>||<button class="b"><a href="../index.html">Halaman awal</a></button></div>
 	<center>
 		<form action="" method="POST">
 <table>
 	<?php $row=mysqli_fetch_assoc($cek);{ ?>
 	<tr>
 		<td><input type="hidden" name="a" maxlength="10" required autofocus value="<?php echo $row['nomoranggota']; ?>"></td>
 	</tr>
 		<tr>
 		<td>Nama anggota</td>
 		<td><input type="text" name="b" maxlength="40" required value="<?php echo $row['namaanggota']; ?>"></td>
 	</tr>
 		<tr>
 		<td>Alamat</td>
 		<td><input type="text" name="c" maxlength="40" required value="<?php echo $row['alamat']; ?>"></td>
 	</tr>
 		<tr>
 		<td>Tanggal</td>
 		<td><input type="date" name="d" maxlength="15" required value="<?php echo $row['tanggaldaftar']; ?>"></td>
 	</tr>
 		<tr>
 		<td>Tanggal kadaluarsa</td>
 		<td><input type="date" name="e" maxlength="15" required value="<?php echo $row['tanggalkadaluarsa']; ?>"></td>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="kirim">kirim</button></td>
 		</tr>
 		<tr>
 	<?php }; ?>
 </table>
 	</form>
 	<b class="y">Untuk perubahan nomor anggota silahkan hubungi admin..!</b>
</center>
 <div class="p">
      <p >Reprogramed by yoga muhamad aryanto 2021</p>
    </div>
 </body>
 </html>
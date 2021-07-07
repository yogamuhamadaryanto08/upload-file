<?php 
require '../fungsi.php';
if (isset($_POST['kirim'])) {
if (tambah3($_POST)>0) {
	echo "<script>
			alert('berhasil ditambah');
			document.location.href='transaksi.php';
		</script>";
}
else{
		echo "<script>
			alert('gagal ditambah');
			document.location.href='transaksi.php';
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
  margin: 0;
  padding: 0;
  font-family: sans-serif;
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

button{
	background-color: green;
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


 	</style>


 </head>
 <body>
 	 <div class="t"><button><a href="../index.html">halaman awal</a></button>||<button><a href="transaksi.php">Kembali</a></button></div>
 	<center>
 		<form action="" method="POST">
 <table>
 		<tr>
 		<td>Kode pustaka</td>
 		<td><input type="text" name="a" maxlength="10" required autofocus=""></td>
 	</tr>
 		<tr>
 		<td>Nomor anggota</td>
 		<td><input type="text" name="b" maxlength="10" required></td>
 	</tr>
 		<tr>
 		<td>Kode pustakawan pinjam</td>
 		<td><input type="text" name="c" maxlength="10" required></td>
 	</tr>
 		<tr>
 		<td>Tanggal pinjam</td>
 		<td><input type="date" name="d" maxlength="10" required></td>
  </tr>
      <tr>
    <td>Kode pustakawan kembali</td>
    <td><input type="text" name="e" maxlength="10" required></td>
  </tr>
      <tr>
    <td>Tanggal kembali</td>
    <td><input type="date" name="f" maxlength="15" required></td>
  </tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="kirim">kirim</button></td>
 		</tr>
 </table>
 	</form>
  <b class="y">Isi dengan benar..!</b>
</center>
 <div class="p">
      <p >Reprogramed by yoga muhamad aryanto 2021</p>
    </div>
 </body>
 </html>
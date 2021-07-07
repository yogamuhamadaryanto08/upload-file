<?php 
require '../fungsi.php';
if (isset($_POST['kirim'])) {
if (tambah($_POST)>0) {
	echo "<script>
			alert('berhasil ditambah');
			document.location.href='anggota.php';
		</script>";
}
else{
		echo "<script>
			alert('gagal ditambah');
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
      font-family: sans-serif;

    }

    table{
 			background-color: blue;
     color: white;
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

   .t{
      	position: fixed;
      	left: 0;
      	bottom: 3%;
      }

      a{
      	text-decoration: none;
      	color: blue;
      }
      a.v,a.vv{
        color: white;
      }
      button.a,button.b{
        background-color: black;
      }


 	</style>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 </head>
 <body>
 	 <div class="t"><button class="a"><a class="v"  href="../index.html">halaman awal</a></button>||<button class="b"><a class="vv" href="anggota.php">Kembali</a></button></div>
 	<center>
 		<form action="" method="POST">
 <table>
 	<tr>
 		<td>Nomor anggota</td>
 		<td><input type="text" name="a" maxlength="10" required autofocus></td>
 	</tr>
 		<tr>
 		<td>Nama anggota</td>
 		<td><input type="text" name="b" maxlength="40" required></td>
 	</tr>
 		<tr>
 		<td>Alamat</td>
 		<td><input type="text" name="c" maxlength="40" required></td>
 	</tr>
 		<tr>
 		<td>Tanggal</td>
 		<td><input type="date" name="d" maxlength="15" required></td>
 	</tr>
 		<tr>
 		<td>Tanggal kadaluarsa</td>
 		<td><input type="date" name="e" maxlength="15" required></td>
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
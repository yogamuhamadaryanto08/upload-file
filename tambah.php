<?php 
require '../fungsi.php';
if (isset($_POST['kirim'])) {
if (tambah1($_POST)>0) {
	echo "<script>
			alert('berhasil ditambah');
			document.location.href='pustaka.php';
		</script>";
}
else{
		echo "<script>
			alert('gagal ditambah');
			document.location.href='pustaka.php';
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
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 </head>
 <body>
 	 <div class="t"><button><a href="pustaka.php">Kembali</a></button>||<button><a href="../index.html">Halaman awal</a></button></div>
 	<center>
 		<form action="" method="POST">
 <table>
 	<tr>
 		<td>Kode pustaka</td>
 		<td><input type="text" name="a" maxlength="10" required autofocus></td>
 	</tr>
 		<tr>
 		<td>Judul pustaka</td>
 		<td><input type="text" name="b" maxlength="100" required></td>
 	</tr>
 		<tr>
 		<td>Pengarang</td>
 		<td><input type="text" name="c" maxlength="100" required></td>
 	</tr>
 		<tr>
 		<td>Penerbit</td>
 		<td><input type="text" name="d" maxlength="100" required></td>
 	</tr>
 		<tr>
 		<td>Tahun terbit</td>
 		<td><input type="date" name="e" required></td>
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
<?php 
require '../fungsi.php';
if (isset($_POST['kirim'])) {
if (tambah2($_POST)>0) {
	echo "<script>
			alert('berhasil ditambah');
			document.location.href='pustakawan.php';
		</script>";
}
else{
		echo "<script>
			alert('gagal ditambah');
			document.location.href='pustakawan.php';
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
 	 <div class="t"><button><a href="../index.html">halaman awal</a></button>||<button><a href="tambah.php">Tambah data</a></button></div>
 	<center>
 		<form action="" method="POST">
 <table>
 	<tr>
 		<td>Kode pustakawan</td>
 		<td><input type="text" name="a" maxlength="10" required autofocus></td>
 	</tr>
 		<tr>
 		<td>Nama pustakawan</td>
 		<td><input type="text" name="b" maxlength="40" required></td>
 	</tr>
 		<tr>
 		<td>Password</td>
 		<td><input type="password" name="c" maxlength="30" required></td>
 	</tr>
 		<tr>
 		<td>Tanggal</td>
 		<td><input type="date" name="d" maxlength="15" required></td>
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
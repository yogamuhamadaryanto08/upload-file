<?php 
require '../fungsi.php';
$no=$_GET['no2'];
$cek= mysqli_query($koneksi,"SELECT * FROM pustakawan WHERE kodepustakawan='$no'");


 if (isset($_POST['kirim'])) {
if (ubah2($_POST)>0) {
	echo "<script>
			alert('berhasil dirubah');
			document.location.href='pustakawan.php';
		</script>";
}
else{
		echo "<script>
			alert('gagal dirubah');
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
 	 <div class="t"><button><a href="pustakawan.php">Kembali</a></button>||<button><a href="../index.html">Halaman awal</a></button></div>
 	<center>
 		<form action="" method="POST">
 <table>
 	<?php $row=mysqli_fetch_assoc($cek);{ ?>
 	<tr>
 		<td><input type="hidden" name="a" maxlength="10" required autofocus value="<?php echo $row['kodepustakawan']; ?>"></td>
 	</tr>
 		<tr>
 		<td>Nama pustakawan</td>
 		<td><input type="text" name="b" maxlength="40" required value="<?php echo $row['namapustakawan']; ?>"></td>
 	</tr>
 		<tr>
 		<td>Password</td>
 		<td><input type="password" name="c" maxlength="40" required value="<?php echo $row['password']; ?>"></td>
 	</tr>
 		<tr>
 		<td>No telepon</td>
 		<td><input type="date" name="d" maxlength="15" required value="<?php echo $row['notelepon']; ?>"></td>
 	</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="kirim">kirim</button></td>
 		</tr>
 		<tr>
 	<?php }; ?>
 </table>
 	</form>
 	<b class="y">Untuk perubahan kode pustakawan silahkan hubungi admin..!</b>
</center>
 <div class="p">
      <p >Reprogramed by yoga muhamad aryanto 2021</p>
    </div>
 </body>
 </html>
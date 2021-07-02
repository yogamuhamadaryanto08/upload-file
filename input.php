<?php 
require '../fungsi.php';
$ambil= mysqli_query($koneksi, "SELECT * FROM gizi");
if (isset($_POST['kirim'])) {

	if (tambah2($_POST) > 0) {
		echo "<script> 
alert('data berhasil ditambah');
document.location.href='gizi.php';
	</script>";
}

else{
		echo "<script> 
alert('data gagal ditambah');
document.location.href='input.php';
	</script>";
}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah data</title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 			font-family: sans-serif;
 		}
 		body{
 			background-color: skyblue;
 		}

 		table{
 			padding: 2%;
 		}
 		button{
 			color: white;
 			background-color: green;
 		}

 		a.u{
 			color: white;
 			text-decoration: none;
 		}
 		.d{
	position: fixed;
	right: 0;
	left: 0;
	bottom: 0;
	background-color: green;
	color: white;
	text-align: center;

}
.r{
	position: fixed;
	right: 1%;
	top: 0.2%;
}

 	</style>
 </head>
 <body>
 <center>
 	<form action="" method="POST">
 <table>
 	<?php $row=mysqli_fetch_assoc($ambil); { ?>
<tr>
	<td><input type="hidden" name="a" maxlength="11" required value="<?php $row ['idlayanan']; ?>"></td>
</tr>
<?php }; ?>
<tr>
 		<td>No RM</td>
 		<td><input type="text" name="b" maxlength="20" required autocomplete="off" autofocus size="25px"></td>
 </tr>
 <tr>
	<td>WAKTU LAYANAN</td>
	<td><input type="datetime-local" name="c" maxlength="10" required  autocomplete="off"></td>
</tr>
<tr>
 		<td>DIET</td>
 		<td><input type="text" name="d" maxlength="20" required autocomplete="off"></td>
 </tr>


<tr>
	<td></td>
<td><button type="submit" name="kirim" >tambah</button> ||<button> <a href="gizi.php" class="u">Kembali</a></button></td>
</tr>

 </table>
 </form>
</center>
   <div class="d"> <p>Reprogramed by yoga muhamad aryanto 2021</p> </div>
     <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
 </body>
 </html>
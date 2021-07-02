<?php 
require '../fungsi.php';

$ambil= mysqli_query($koneksi, "SELECT * FROM pasien");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar pasien</title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style type="text/css">
*{
	margin: 0;
	padding:0;
	font-family: sans-serif;
}

  	a{
  		text-decoration: none;
  		color:blue;

  	}
.a{
	text-align: center;
	background-color: #00ff00;
}

.d{
	position: fixed;
	bottom: 0;
	right: 0;
	left: 0;
	background-color: green;
	text-align: center;
	color: white;

}
.r{
	position: fixed;
	right: 1%;
	top: 0.2%;
}
body{
	background-color: skyblue;
}
  </style>
 </head>
 <body>
 <div class="a">
 	<b><a href="input.php">TAMBAH DATA</a></b> || <b><a href="../ruangan/ruangan.php">LAYANAN RUANGAN</a></b> || <b><a href="../gizi/gizi.php">LAYANAN GIZI</a></b>
 	<hr>
 </div>
 <center>
 <table border="1" cellspacing="0" cellpadding="10" width="100%"> 
 	<tr>
 		<th>NO</th>
 		<th>Aksi</th>
 		<th>No RM</th>
 		<th>No Id Pasien</th>
 		<th>Jenis Id</th>
 		<th>Nama Pasien</th>
 		<th>Alamat</th>
 		<th>Agama</th>
 		<th>Golongan Darah</th>
 		<th>Tanggal Lahir</th>
 		<th>Jenis Kelamin</th>
 		<th>Waktu Daftar</th>
 	</tr>
 	<tr>
 		<?php $i=1; ?>
 		<?php while ($row=mysqli_fetch_assoc($ambil)): {
 		} ?>
 		<td><?php echo $i;; ?></td>
 		<td><a href="../hapus.php?no=<?php echo $row['noidpasien']; ?>" onclick="return confirm('yakin ingin menghapus..?')">hapus</a> <=> <a href="edit.php?no=<?php echo $row['norm'];  ?> ">edit</a></td>
 		<td> <?php echo $row['norm']; ?></td>
 		<td><?php echo $row['noidpasien']; ?></td>
 		<td><?php echo $row['jenisid']; ?></td>
 		<td><?php echo $row['namapasien']; ?></td>
 		<td><?php echo $row['alamat']; ?></td>
 		<td><?php echo $row['agama']; ?></td>
 		<td><?php echo $row['golongandarah']; ?></td>
 		<td><?php echo $row['tanggallahir']; ?></td>
 		<td><?php echo $row['jeniskelamin']; ?></td>
 		<td><?php echo $row['waktudaftar']; ?></td>
 	</tr>
 	<?php $i++; ?>
 <?php endwhile; ?>
 </table></center>
  <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
 <div class="d"> <p>Reprogramed by yoga muhamad aryanto 2021</p> </div>
 </body>
 </html>
<?php 
require '../fungsi.php';

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
 		body{
 			background-color: silver;
 		}
 		table{
 			background-color:skyblue;
 			color: red;
 		}
 		    .p{

        position: fixed;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: green;
        color: white;
        text-align: center;
        font-style:italic;
      }
      a{
      	text-decoration: none;
      	color: blue;
      }


      a.v,a.f{
        color: white;
      }
      .t{
      	position: fixed;
      	left: 0;
      	bottom: 3%;
      }
th{
  color: black;
}
button {
  background-color:black;
}



 	</style>
 	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 </head>
 <body>
 	<div class="t"><button><a class="v" href="../index.html">halaman awal</a></button>||<button><a class="f" href="tambah.php">Tambah data</a></button></div>
 	<table border="1px" cellspacing="0" cellpadding="10" width="100%">
 <tr>
 	<th>NO</th>
 	<th>AKSI</th>
 	<th>NOMOR ANGGOTA</th>
 	<th>NAMA ANGGOTA</th>
 	<th>ALAMAT</th>
 	<th>TANGGAL DAFTAR</th>
 	<th>TANGGAL KADALUARSA</th>
 </tr>
 <?php $i=1; ?>
 	<?php while ($row=mysqli_fetch_assoc($anggota)): {
 	
 	} ?>
 <tr>
 	<td><?php echo $i; ?></td>
 	<td><a href="../hapus.php?no=<?php echo $row['nomoranggota'];?>" onclick="return confirm('yakin ingin dihapus..?')">hapus</a>|| <a href="edit.php?no=<?php echo $row['nomoranggota'];?>">edit</a></td>
 	<td><?php echo $row['nomoranggota']; ?></td>
 	<td><?php echo $row['namaanggota']; ?></td>
 	<td><?php echo $row['alamat']; ?></td>
 	<td><?php echo $row['tanggaldaftar']; ?></td>
 	<td><?php echo $row['tanggalkadaluarsa']; ?></td>

 </tr>
 <?php $i++; ?>
<?php endwhile; ?>
  <div class="p">
      <p>Programed by yoga muhamad aryanto 2021</p>
    </div>
 </table>
 </body>
 </html>
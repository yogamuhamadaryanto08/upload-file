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
 		}
 		body{
 			background-color: black;
 		}
 		table{
 			background-color:silver;
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
      }
      a{
      	text-decoration: none;
      	color: blue;
      }
      .t{
      	position: fixed;
      	left: 0;
      	bottom: 3%;
        background-color: white;
      }
th{
  color: black;
}
button{
  background-color: skyblue;
}



 	</style>
 	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 </head>
 <body>
 	<div class="t"><button><a href="../index.html">halaman awal</a></button>||<button><a href="tambah.php">Tambah data</a></button></div>
 	<table border="1px" cellspacing="0" cellpadding="10" width="100%">
 <tr>
 	<th>NO</th>
 	<th>AKSI</th>
 	<th>KODE PUSTAKA</th>
 	<th>JUDUL PUSTAKA</th>
 	<th>PENGARANG</th>
 	<th>PENERBIT</th>
 	<th>TAHUN TERBIT</th>
 </tr>
 <?php $i=1; ?>
 	<?php while ($row=mysqli_fetch_assoc($pustaka)): {
 	
 	} ?>
 <tr>
 	<td><?php echo $i; ?></td>
 	<td><a href="../hapus.php?no1=<?php echo $row['kodepustaka'];?>" onclick="return confirm('yakin ingin dihapus..?')">hapus</a>|| <a href="edit.php?no1=<?php echo $row['kodepustaka'];?>">edit</a></td>
 	<td><?php echo $row['kodepustaka']; ?></td>
 	<td><?php echo $row['judulpustaka']; ?></td>
 	<td><?php echo $row['pengarang']; ?></td>
 	<td><?php echo $row['penerbit']; ?></td>
 	<td><?php echo $row['tahunterbit']; ?></td>

 </tr>
 <?php $i++; ?>
<?php endwhile; ?>
  <div class="p">
      <p>Reprogramed by yoga muhamad aryanto 2021</p>
    </div>
 </table>
 </body>
 </html>
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
 			background-color: skyblue;
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
      }
th{
  color: black;
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
 	<th>ID TRANSAKSI</th>
 	<th>KODE PUSTAKA</th>
 	<th>NOMOR ANGGOTA</th>
 	<th>KODE PUSTAKAWAN PINJAM</th>
 	<th>TANGGAL PINJAM</th>
  <TH>KODE PUSTAKAWAN KEMBALI</TH>
  <TH>TANGGAL KEMBALI</TH>
 </tr>
 <?php $i=1; ?>
 	<?php while ($row=mysqli_fetch_assoc($transaksi)): {
 	
 	} ?>
 <tr>
 	<td><?php echo $i; ?></td>
 	<td><a href="../hapus.php?no3=<?php echo $row['idtransaksi'];?>" onclick="return confirm('yakin ingin dihapus..?')">hapus</a>|| <a href="edit.php?no3=<?php echo $row['idtransaksi'];?>">edit</a></td>
 	<td><?php echo $row['idtransaksi']; ?></td>
 	<td><?php echo $row['kodepustaka']; ?></td>
 	<td><?php echo $row['nomoranggota']; ?></td>
 	<td><?php echo $row['kodepustakawanpinjam']; ?></td>
 	<td><?php echo $row['tanggalpinjam']; ?></td>
  <td><?php echo $row['kodepustakawankembali']; ?></td>
  <td><?php echo $row['tanggalkembali']; ?></td>


 </tr>
 <?php $i++; ?>
<?php endwhile; ?>
  <div class="p">
      <p>Reprogramed by yoga muhamad araynto 2021</p>
    </div>
 </table>
 </body>
 </html>
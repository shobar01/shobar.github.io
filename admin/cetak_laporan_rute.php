<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA RUTE</title>
</head>
<body>
 
	<center>
 
		<h2>DATA RUTE</h2>
		
 
	</center>
 
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			
  	
   <th>ID Rute</th>
    <th>Tujuan</th>
    <th>Rute Awal</th>
    <th>Rute Akhir</th>
    <th>Harga</th>
    <th>ID Transportasi</th>
			
		</tr>
		<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_rute")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $menu ['id_rute']?></td>
<td><?php echo $menu ['tujuan']?></td>
<td><?php echo $menu ['rute_awal']?></td>
<td><?php echo $menu ['rute_akhir']?></td>
<td><?php echo $menu ['harga']?></td>
<td><?php echo $menu ['id_transportasi']?></td>
			
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA TYPE TRANSPORTASI</title>
</head> 
<body>
 
	<center>
 
		<h2>DATA TYPE TRANSPORTASI</h2>
		
 
	</center>
 
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			
  	
   <th>ID Type Transportasi</th>
    <th>Nama Type</th>
    <th>Keterangan</th>
			
		</tr>
		<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_type_transportasi")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $menu ['id_type_transportasi']?></td>
<td><?php echo $menu ['nama_type']?></td>
<td><?php echo $menu ['keterangan']?></td>
			
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
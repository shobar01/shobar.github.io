<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA LEVEL</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LEVEL</h2>
		
 
	</center>
 
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Level</th>
			<th>Nama Level</th>
			
		</tr>
		<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_level")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $menu['id_level']; ?></td>
			<td><?php echo $menu['nama_level']; ?></td>
			
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
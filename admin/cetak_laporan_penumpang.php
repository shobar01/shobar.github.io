<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA PENUMPANG</title>
</head>
<body>
 
	<center>
 
		<h2>DATA PENUMPANG</h2>
		
 
	</center>
 
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			
  	<th>ID Penumpang</th>
    <th>Username</th>
    <th>Password</th>
    <th>Nama Penumpang</th>
    <th>Alamat Penumpang</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Telefone</th>
			
		</tr>
		<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_penumpang")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $menu ['id_penumpang']?></td>
<td><?php echo $menu ['username']?></td>
<td><?php echo $menu ['password']?></td>
<td><?php echo $menu ['nama_penumpang']?></td>
<td><?php echo $menu ['alamat_penumpang']?></td>
<td><?php echo $menu ['tanggal_lahir']?></td>
<td><?php echo $menu ['jenis_kelamin']?></td>
<td><?php echo $menu ['telefone']?></td>
			
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
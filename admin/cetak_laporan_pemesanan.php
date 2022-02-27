<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA PEMESANAN</title>
</head>
<body>
 
	<center>
 
		<h2>DATA PEMESANAN</h2>
		
 
	</center>
 
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Pmsn</th>
    <th>Kode Pmsn</th>
    <th>Tgl Pmsn</th>
    <th>Tempat Pmsn</th>
    <th>Id pelanggan</th>
    <th>Kode kursi</th>
    <th>Id rute</th>
    <th>Tujuan</th>
    <th>Tgl berangkat</th>
    <th>Jam cekin</th>
    <th>Jam berangkat</th>
    <th>Total bayar</th>
    <th>Id petugas</th>
			
		</tr>
		<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_pemesanan")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $menu ['id_pemesanan']?></td>
<td><?php echo $menu ['kode_pemesanan']?></td>
<td><?php echo $menu ['tanggal_pemesanan']?></td>
<td><?php echo $menu ['tempat_pemesanan']?></td>
<td><?php echo $menu ['id_penumpang']?></td>
<td><?php echo $menu ['kode_kursi']?></td>
<td><?php echo $menu ['id_rute']?></td>
<td><?php echo $menu ['tujuan']?></td>
<td><?php echo $menu ['tanggal_berangkat']?></td>
<td><?php echo $menu ['jam_cekin']?></td>
<td><?php echo $menu ['jam_berangkat']?></td>
<td><?php echo $menu ['total_bayar']?></td>
<td><?php echo $menu ['id_petugas']?></td>
			
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
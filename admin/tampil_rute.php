          <!-- Page Content -->
           <table class="table table-striped table-bordered tabel-hover" id="dataTables-example">
<thead>
  <tr>
   <a href="?page=rute&aksi=tambah" class="btn-primary btn-xs" style="margin-bottom: 5px"><i class="fa fa-plus">TAMBAH</a></i>
    <a href="cetak_laporan_rute.php" target="_blank" style="margin-bottom: 5px" class="btn-prymary btn-xs" style="margin-bottom: 5px"><i class="fa fa-print">LAPORAN</a></i>
  </tr>
  <tr>
    <th>No</th>
    <th>ID Rute</th>
    <th>Tujuan</th>
    <th>Rute Awal</th>
    <th>Rute Akhir</th>
    <th>Harga</th>
    <th>ID Transportasi</th>
    <th>Aksi</th>
  </tr>
  </thead>
<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_rute")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $no?></td>
<td><?php echo $menu ['id_rute']?></td>
<td><?php echo $menu ['tujuan']?></td>
<td><?php echo $menu ['rute_awal']?></td>
<td><?php echo $menu ['rute_akhir']?></td>
<td><?php echo $menu ['harga']?></td>
<td><?php echo $menu ['id_transportasi']?></td>



<td>  <a href="?page=rute&aksi=edit&id_rute=<?php echo $menu['id_rute'] ?>" class="btn btn-primary">EDIT</a>     |  
                        <a onclick="return confirm ('Anda Yakin ingin mengahapus Data')" href="?page=rute&aksi=delete&id_rute=<?php echo $menu['id_rute'] ?>" class="btn btn-success">DELETE</a> 
                  

      </td>
</tr>
<?php
$no++;
}
?>
</table>
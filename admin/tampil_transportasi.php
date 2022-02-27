          <!-- Page Content -->
           <table class="table table-striped table-bordered tabel-hover" id="dataTables-example">
<thead>
  <tr>
   <a href="?page=transportasi&aksi=tambah" class="btn-primary btn-xs" style="margin-bottom: 5px"><i class="fa fa-plus">TAMBAH</a></i>
    <a href="cetak_laporan_transportasi.php" target="_blank" style="margin-bottom: 5px" class="btn-prymary btn-xs" style="margin-bottom: 5px"><i class="fa fa-print">LAPORAN</a></i>
  </tr>
  <tr>
    <th>No</th>
    <th>ID Transportasi</th>
    <th>Kode</th>
    <th>Jumlah Kursi</th>
    <th>Keterangan</th>
    <th>ID Type Transportasi</th>
    <th>Aksi</th>
  </tr>
  </thead>
<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_transportasi")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $no?></td>
<td><?php echo $menu ['id_transportasi']?></td>
<td><?php echo $menu ['kode']?></td>
<td><?php echo $menu ['jumlah_kursi']?></td>
<td><?php echo $menu ['keterangan']?></td>
<td><?php echo $menu ['id_type_transportasi']?></td>



<td>  <a href="?page=transportasi&aksi=edit&id_transportasi=<?php echo $menu['id_transportasi'] ?>" class="btn btn-primary">EDIT</a>     |  
                        <a onclick="return confirm ('Anda Yakin ingin mengahapus Data')" href="?page=transportasi&aksi=delete&id_transportasi=<?php echo $menu['id_transportasi'] ?>" class="btn btn-success">DELETE</a> 
                  

      </td>
</tr>
<?php
$no++;
}
?>
</table>
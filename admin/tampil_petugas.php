          <!-- Page Content -->
           <table class="table table-striped table-bordered tabel-hover" id="dataTables-example">
<thead>
  <tr>
   <a href="cetak_laporan_petugas.php" target="_blank" style="margin-bottom: 5px" class="btn-prymary btn-xs" style="margin-bottom: 5px"><i class="fa fa-print">LAPORAN</a></i>
  
  </tr>
  <tr>
    <th>No</th>
    <th>ID Petugas</th>
    <th>Username</th>
    <th>Password</th>
    <th>Nama Petugas</th>
    <th>Id Level</th>
    <th>Aksi</th>
  </tr>
  </thead>
<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_petugas")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $no?></td>
<td><?php echo $menu ['id_petugas']?></td>
<td><?php echo $menu ['username']?></td>
<td><?php echo $menu ['password']?></td>
<td><?php echo $menu ['nama_petugas']?></td>
<td><?php echo $menu ['id_level']?></td>

<td>  <a href="?page=petugas&aksi=edit&id_petugas=<?php echo $menu['id_petugas'] ?>" class="btn btn-primary">EDIT</a>     |  
                        <a onclick="return confirm ('Anda Yakin ingin mengahapus Data')" href="?page=petugas&aksi=delete&id_petugas=<?php echo $menu['id_petugas'] ?>" class="btn btn-success">DELETE</a> 
                  

      </td>
</tr>
<?php
$no++;
}
?>
</table>
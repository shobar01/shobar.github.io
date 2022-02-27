          <!-- Page Content -->
           <table class="table table-striped table-bordered tabel-hover" id="dataTables-example">
<thead>
    <tr>
   <a href="?page=penumpang&aksi=tambah" class="btn-primary btn-xs" style="margin-bottom: 5px"><i class="fa fa-plus">TAMBAH</a></i>
    <a href="cetak_laporan_penumpang.php" target="_blank" style="margin-bottom: 5px" class="btn-prymary btn-xs" style="margin-bottom: 5px"><i class="fa fa-print">LAPORAN</a></i>
  </tr>
  <tr>
    <th>No</th>
    <th>ID Penumpang</th>
    <th>Username</th>
    <th>Password</th>
    <th>Nama Penumpang</th>
    <th>Alamat Penumpang</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Telefone</th>
    <th>Aksi</th>
  </tr>
  </thead>
<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_penumpang")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $no?></td>
<td><?php echo $menu ['id_penumpang']?></td>
<td><?php echo $menu ['username']?></td>
<td><?php echo $menu ['password']?></td>
<td><?php echo $menu ['nama_penumpang']?></td>
<td><?php echo $menu ['alamat_penumpang']?></td>
<td><?php echo $menu ['tanggal_lahir']?></td>
<td><?php echo $menu ['jenis_kelamin']?></td>
<td><?php echo $menu ['telefone']?></td>


<td>  <a href="?page=penumpang&aksi=edit&id_penumpang=<?php echo $menu['id_penumpang'] ?>" class="btn btn-primary">EDIT</a>     |  
                        <a onclick="return confirm ('Anda Yakin ingin mengahapus Data')" href="?page=penumpang&aksi=delete&id_penumpang=<?php echo $menu['id_penumpang'] ?>" class="btn btn-success">DELETE</a> 
                  

      </td>
</tr>
<?php
$no++;
}
?>
</table>
            <!-- Page Content -->
           <table class="table table-striped table-bordered tabel-hover" id="dataTables-example">
<thead>
  <tr>
   <a href="?page=pemesanan&aksi=tambah" class="btn-primary btn-xs" style="margin-bottom: 5px"><i class="fa fa-plus">TAMBAH</a></i>
    <a href="cetak_laporan_pemesanan.php" target="_blank" style="margin-bottom: 5px" class="btn-prymary btn-xs" style="margin-bottom: 5px"><i class="fa fa-print">LAPORAN</a></i>
  </tr>
  <tr>
    <th>No</th>
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
    <th>Aksi</th>
  </tr>
  </thead>
<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_pemesanan")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $no?></td>
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


<td>  <a href="?page=pemesanan&aksi=edit&id_pemesanan=<?php echo $menu['id_pemesanan'] ?>" class="btn btn-primary">EDIT</a>     |  
                        <a onclick="return confirm ('Anda Yakin ingin mengahapus Data')" href="?page=pemesanan&aksi=delete&id_pemesanan=<?php echo $menu['id_pemesanan'] ?>" class="btn btn-success">DELETE</a> 
                  

      </td>
</tr>
<?php
$no++;
}
?>
</table>
 
          <!-- Page Content -->
           <table class="table table-striped table-bordered tabel-hover" id="dataTables-example">
<thead>
  <tr>
  <a href="cetak_laporan.php" target="_blank" style="margin-bottom: 5px" class="btn-prymary btn-xs" style="margin-bottom: 5px"><i class="fa fa-print">LAPORAN</a></i>
  
  </tr>
  <tr>
    <th>No</th>
    <th>ID Level</th>
    <th>Nama Level</th>
  </tr>
  </thead>
<?php
include("../inc/koneksi.php");
$result = mysql_query("SELECT * FROM tb_level")or die (mysql_error());
$no=1;
while ($menu=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $no?></td>
<td><?php echo $menu ['id_level']?></td>
<td><?php echo $menu ['nama_level']?></td>


                  

      </td>
</tr>
<?php
$no++;
}
?>
</table>
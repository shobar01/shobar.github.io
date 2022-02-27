<?php
	$ID=isset($_GET['id_level']) ? $_GET['id_level'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_level WHERE id_level='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH DATA LEVEL
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID level</label>
				<input class="form-control" name="Id_level">
			</div>
			<div class="form-group">
				<label>Nama Level</label>
				<input class="form-control" name="Nama_level">
			</div>
			
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>
<?php
	$ID = isset($_POST['Id_level']) ? $_POST['Id_level'] : null;
	$NAMA = isset($_POST['Nama_level']) ? $_POST['Nama_level'] : null;
	
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="INSERT INTO tb_level SET
		id_level='$ID',
		nama_level='$NAMA',
		";


		(mysql_query($SQL,$KONEKSI));

		$SQL ="INSERT INTO tb_petugas SET
		username='$USERNAME',
		password='$PASSWORD',
		id_level='$NAMA',
		id_level='$id_level'";

		
		if(mysql_query($SQL,$KONEKSI)){
?>
			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=level";</script>
			<?php
		}
	}
	?>
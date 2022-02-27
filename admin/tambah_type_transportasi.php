
<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH DATA TYPE TRANSPORTASI
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID Type Transportasi</label>
				<input class="form-control" name="Id_type_transportasi">
			</div>
			<div class="form-group">
				<label>Nama Type</label>
				<input class="form-control" name="Nama_type">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input class="form-control" name="Keterangan">
			</div>
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>
<?php
	$ID = isset($_POST['Id_type_transportasi']) ? $_POST['Id_type_transportasi'] : null;
	$NAMA = isset($_POST['Nama_type']) ? $_POST['Nama_type'] : null;
	$KET = isset($_POST['Keterangan']) ? $_POST['Keterangan'] : null;
	
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="INSERT INTO tb_type_transportasi SET
		id_type_transportasi='$ID',
		nama_type='$NAMA',
		keterangan='$KET'
		";



		
		if(mysql_query($SQL,$KONEKSI)){
?>
			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=type";</script>
			<?php
		}
	}
	?>

<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH DATA TRANSPORTASI
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID Transportasi</label>
				<input class="form-control" name="Id_transportasi">
			</div>
			<div class="form-group">
				<label>Kode</label>
				<input class="form-control" name="Kode">
			</div>
			<div class="form-group">
				<label>Jumlah Kursi</label>
				<input class="form-control" name="Jumlah_kursi">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input class="form-control" name="Keterangan">
			</div>
			<div class="form-group">
				<label>ID Type Transportasi</label>
				<input class="form-control" name="Id_type_transportasi">
			</div>
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>
<?php
	$ID = isset($_POST['Id_transportasi']) ? $_POST['Id_transportasi'] : null;
	$KODE = isset($_POST['Kode']) ? $_POST['Kode'] : null;
	$JUMLAH = isset($_POST['Jumlah_kursi']) ? $_POST['Jumlah_kursi'] : null;
	$KET = isset($_POST['Keterangan']) ? $_POST['Keterangan'] : null;
	$IDTYPE = isset($_POST['Id_type_transportasi']) ? $_POST['Id_type_transportasi'] : null;
	
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="INSERT INTO tb_transportasi SET
		id_transportasi='$ID',
		kode='$KODE',
		jumlah_kursi='$JUMLAH',
		keterangan='$KET',
		id_type_transportasi='$IDTYPE'
		";


		
		if(mysql_query($SQL,$KONEKSI)){
?>
			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=transportasi";</script>
			<?php
		}
	}
	?>
<?php
	$ID=isset($_GET['id_transportasi']) ? $_GET['id_transportasi'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_transportasi WHERE id_transportasi='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
<h2>FORM EDIT TRANSPORTASI</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID Transportasi</label>
				<input class="form-control" name="Id_transportasi" value="<?php echo $TAMPIL['id_transportasi']; ?>">
			</div>
			<div class="form-group">
				<label>Kode</label>
				<input class="form-control" name="Kode" value="<?php echo $TAMPIL['kode']; ?>">
			</div>
			<div class="form-group">
				<label>Jumlah Kursi</label>
				<input class="form-control" name="Jumlah_kursi" value="<?php echo $TAMPIL['jumlah_kursi']; ?>">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input class="form-control" name="Keterangan" value="<?php echo $TAMPIL['keterangan']; ?>">
			</div>
			<div class="form-group">
				<label>ID Type Transportasi</label>
				<input class="form-control" name="Id_type_transportasi" value="<?php echo $TAMPIL['id_type_transportasi']; ?>">
			</div>
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
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
		$SQL ="UPDATE tb_transportasi SET
		id_transportasi='$ID',
		kode='$KODE',
		jumlah_kursi='$JUMLAH',
		keterangan='$KET',
		id_type_transportasi='$IDTYPE'
		
		WHERE id_transportasi ='$ID'";

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
		alert (" edit data berhasil di lakukan");
		window.location.href="?page=transportasi";
			</script>
			<?php

		}
	}
	?>
<?php
	$ID=isset($_GET['id_type_transportasi']) ? $_GET['id_type_transportasi'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_type_transportasi WHERE id_type_transportasi='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
<h2>FORM EDIT Type</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID Type Transportasi</label>
				<input class="form-control" name="Id_type_transportasi" value="<?php echo $TAMPIL['id_type_transportasi']; ?>">
			</div>
			<div class="form-group">
				<label>Nama Type</label>
				<input class="form-control" name="Nama_type" value="<?php echo $TAMPIL['nama_type']; ?>">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input class="form-control" name="Keterangan" value="<?php echo $TAMPIL['keterangan']; ?>">
			</div>
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
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
		$SQL ="UPDATE tb_type_transportasi SET
		id_type_transportasi='$ID',
		nama_type='$NAMA',
		keterangan='$KET'
		
		WHERE id_type_transportasi ='$ID'";

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
		alert (" edit data berhasil di lakukan");
		window.location.href="?page=type";
			</script>
			<?php

		}
	}
	?>
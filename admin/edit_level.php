<?php
	$ID=isset($_GET['id_level']) ? $_GET['id_level'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_level WHERE id_level='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
<h2>FORM EDIT LEVEL</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID level</label>
				<input class="form-control" name="Id_level" value="<?php echo $TAMPIL['id_level']; ?>">
			</div>
			<div class="form-group">
				<label>Nama Pegawai</label>
				<input class="form-control" name="Nama_level" value="<?php echo $TAMPIL['nama_level']; ?>">
			
			</div>
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
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
		$SQL ="UPDATE tb_level SET
		id_level='$ID',
		nama_level='$NAMA',
		
		WHERE id_level ='$ID'";

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
		alert (" edit data berhasil di lakukan");
		window.location.href="?page=level";
			</script>
			<?php

		}
	}
	?>
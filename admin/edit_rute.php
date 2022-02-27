<?php
	$ID=isset($_GET['id_rute']) ? $_GET['id_rute'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_rute WHERE id_rute='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
<h2>FORM EDIT RUTE</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID RUTE</label>
				<input class="form-control" name="id" value="<?php echo $TAMPIL['id_rute']; ?>">
			</div>
			<div class="form-group">
				<label>TUJUAN</label>
				<input class="form-control" name="tj" value="<?php echo $TAMPIL['tujuan']; ?>">
			</div>
			<div class="form-group">
				<label>RUTE AWAL</label>
				<input class="form-control" name="rtal" value="<?php echo $TAMPIL['rute_awal']; ?>">
			</div>
			<div class="form-group">
				<label>RUTE AKHIR</label>
				<input class="form-control" name="rthir" value="<?php echo $TAMPIL['rute_akhir']; ?>">
			</div>
			<div class="form-group">
				<label>HARGA</label>
				<input class="form-control" name="hg" value="<?php echo $TAMPIL['harga']; ?>">
			</div>
			<div class="form-group">
				<label>ID TRANSPORTASI</label>
				<input class="form-control" name="idt" value="<?php echo $TAMPIL['id_transportasi']; ?>">
			</div>
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>

<?php
	$ID_RUTE = isset($_POST['id']) ? $_POST['id'] : null;
	$TUJUAN = isset($_POST['tj']) ? $_POST['tj'] : null;
	$RUTE_AWAL = isset($_POST['rtal']) ? $_POST['rtal'] : null;
	$RUTE_AKHIR = isset($_POST['rthir']) ? $_POST['rthir'] : null;
	$HARGA = isset($_POST['hg']) ? $_POST['hg'] : null;
	$ID_TRANSPORTASI = isset($_POST['idt']) ? $_POST['idt'] : null;
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="UPDATE tb_rute SET
		id_rute='$ID_RUTE',
		tujuan='$TUJUAN',
		rute_awal='$RUTE_AWAL',
		rute_akhir='$RUTE_AKHIR',
		harga='$HARGA',
		id_transportasi='$ID_TRANSPORTASI'


		WHERE 	id_rute='$ID'";
		

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
		alert (" edit data berhasil di lakukan");
		window.location.href="?page=rute";
			</script>
			<?php

		}
	}
	?>
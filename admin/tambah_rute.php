<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH RUTE
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID RUTE</label>
				<input class="form-control" name="id">
			</div>
			<div class="form-group">
				<label>TUJUAN</label>
				<input class="form-control" name="tj">
			</div>
			<div class="form-group">
				<label>RUTE AWAL</label>
				<input class="form-control" name="rtal">
			</div>
			<div class="form-group">
				<label>RUTE AKHIR</label>
				<input class="form-control" name="rthir">
			</div>
			<div class="form-group">
				<label>HARGA</label>
				<input class="form-control" name="hg">
			</div>
			<div class="form-group">
				<label>ID TRANSPORTASI</label>
				<input class="form-control" name="idt">
			</div>
			
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
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
		$SQL ="INSERT INTO tb_rute SET
		id_rute='$ID_RUTE',
		tujuan='$TUJUAN',
		rute_awal='$RUTE_AWAL',
		rute_akhir='$RUTE_AKHIR',
		harga='$HARGA',
		id_transportasi='$ID_TRANSPORTASI'";

		
		if(mysql_query($SQL,$KONEKSI)){
?>

			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=rute";</script>
			<?php
		}
	}
	?>


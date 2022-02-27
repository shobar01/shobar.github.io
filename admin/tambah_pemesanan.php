

<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH PEMESANAN
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID PEMESANAN</label>
				<input class="form-control" name="id">
			</div>
			<div class="form-group">
				<label>KODE PEMESANAN</label>
				<input class="form-control" name="kd">
			</div>
			<div class="form-group">
				<label>TANGGAL PEMESANAN</label>
				<input class="form-control" name="tgp" type="date">
			</div>
			<div class="form-group">
				<label>TEMPAT PEMESANAN</label>
				<input class="form-control" name="tp">
			</div>
			<div class="form-group">
				<label>ID PELANGGAN</label>
				<input class="form-control" name="idp">
			</div>
			<div class="form-group">
				<label>KODE KURSI</label>
				<input class="form-control" name="kdr">
			</div>
			<div class="form-group">
				<label>ID RUTE</label>
				<input class="form-control" name="idr">
			</div>
			<div class="form-group">
				<label>TUJUAN</label>
				<input class="form-control" name="tj">
			</div>
			<div class="form-group">
				<label>TANGGAL BERANGKAT</label>
				<input class="form-control" name="tb" type="date">
			</div>
			<div class="form-group">
				<label>JAM CEKIN</label>
				<input class="form-control" name="jc">
			</div>
			<div class="form-group">
				<label>JAM BERANGKAT</label>
				<input class="form-control" name="jbr">
			</div>
			<div class="form-group">
				<label>TOTAL BAYAR</label>
				<input class="form-control" name="tbr">
			</div>
			<div class="form-group">
				<label>ID PETUGAS</label>
				<input class="form-control" name="idpt">
			</div>
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>
<?php
	$ID_PEMESANAN = isset($_POST['id']) ? $_POST['id'] : null;
	$KODE_PEMESANAN = isset($_POST['kd']) ? $_POST['kd'] : null;
	$TANGGAL_PEMESANAN = isset($_POST['tgp']) ? $_POST['tgp'] : null;
	$TEMPAT_PEMESANAN = isset($_POST['tp']) ? $_POST['tp'] : null;
	$ID_PENUMPANG = isset($_POST['idp']) ? $_POST['idp'] : null;
	$KODE_KURSI = isset($_POST['kdr']) ? $_POST['kdr'] : null;
	$ID_RUTE = isset($_POST['idr']) ? $_POST['idr'] : null;
	$TUJUAN = isset($_POST['tj']) ? $_POST['tj'] : null;
	$TANGGAL_BERANGKAT = isset($_POST['tb']) ? $_POST['tb'] : null;
	$JAM_CEKIN = isset($_POST['jc']) ? $_POST['jc'] : null;
	$JAM_BERANGKAT = isset($_POST['jbr']) ? $_POST['jbr'] : null;
	$TOTAL_BAYAR = isset($_POST['tbr']) ? $_POST['tbr'] : null;
	$ID_PETUGAS = isset($_POST['idpt']) ? $_POST['idpt'] : null;
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="INSERT INTO tb_pemesanan SET
		id_pemesanan='$ID_PEMESANAN',
		kode_pemesanan='$KODE_PEMESANAN',
		tanggal_pemesanan='$TANGGAL_PEMESANAN',
		tempat_pemesanan='$TEMPAT_PEMESANAN',
		id_penumpang='$ID_PENUMPANG',
		kode_kursi='$KODE_KURSI',
		id_rute='$ID_RUTE',
		tujuan='$TUJUAN',
		tanggal_berangkat='$TANGGAL_BERANGKAT',
		jam_cekin='$JAM_CEKIN',
		jam_berangkat='$JAM_BERANGKAT',
		total_bayar='$TOTAL_BAYAR',
		id_petugas='$ID_PETUGAS'";

		
		if(mysql_query($SQL,$KONEKSI)){
?>

			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=pemesanan";</script>
			<?php
		}
	}
	?>

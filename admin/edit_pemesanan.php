<?php
	$ID=isset($_GET['id_pemesanan']) ? $_GET['id_pemesanan'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_pemesanan WHERE id_pemesanan='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
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
				<input class="form-control" name="id" value="<?php echo $TAMPIL['id_pemesanan']; ?>">
			</div>
			<div class="form-group">
				<label>KODE PEMESANAN</label>
				<input class="form-control" name="kd" value="<?php echo $TAMPIL['kode_pemesanan']; ?>">
			</div>
			<div class="form-group">
				<label>TANGGAL PEMESANAN</label>
				<input class="form-control" name="tgp" type="date" value="<?php echo $TAMPIL['tanggal_pemesanan']; ?>">
			</div>
			<div class="form-group">
				<label>TEMPAT PEMESANAN</label>
				<input class="form-control" name="tp" value="<?php echo $TAMPIL['tempat_pemesanan']; ?>">
			</div>
			<div class="form-group">
				<label>ID PENUMPANG</label>
				<input class="form-control" name="idp" value="<?php echo $TAMPIL['id_penumpang']; ?>">
			</div>
			<div class="form-group">
				<label>KODE KURSI</label>
				<input class="form-control" name="kdr" value="<?php echo $TAMPIL['kode_kursi']; ?>">
			</div>
			<div class="form-group">
				<label>ID RUTE</label>
				<input class="form-control" name="idr" value="<?php echo $TAMPIL['id_rute']; ?>">
			</div>
			<div class="form-group">
				<label>TUJUAN</label>
				<input class="form-control" name="tj" value="<?php echo $TAMPIL['tujuan']; ?>">
			</div>
			<div class="form-group">
				<label>TANGGAL BERANGKAT</label>
				<input class="form-control" name="tb" type="date" value="<?php echo $TAMPIL['tanggal_berangkat']; ?>">
			</div>
			<div class="form-group">
				<label>JAM CEKIN</label>
				<input class="form-control" name="jc" value="<?php echo $TAMPIL['jam_cekin']; ?>">
			</div>
			<div class="form-group">
				<label>JAM BERANGKAT</label>
				<input class="form-control" name="jbr" value="<?php echo $TAMPIL['jam_berangkat']; ?>">
			</div>
			<div class="form-group">
				<label>TOTAL BAYAR</label>
				<input class="form-control" name="tbr" value="<?php echo $TAMPIL['total_bayar']; ?>">
			</div>
			<div class="form-group">
				<label>ID PETUGAS</label>
				<input class="form-control" name="idpt" value="<?php echo $TAMPIL['id_petugas']; ?>">
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
		$SQL ="UPDATE tb_pemesanan SET
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
		id_petugas='$ID_PETUGAS' 

		WHERE 	id_pemesanan='$ID'";

		
		if(mysql_query($SQL,$KONEKSI)){
?>

			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=pemesanan";</script>
			<?php
		}
	}
	?>

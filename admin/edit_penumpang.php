<?php
	$ID=isset($_GET['id_penumpang']) ? $_GET['id_penumpang'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_penumpang WHERE id_penumpang='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
<h2>FORM EDIT PENUMPANG</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID PENUMPANG</label>
				<input class="form-control" name="id" value="<?php echo $TAMPIL['id_penumpang']; ?>">
			</div>
			<div class="form-group">
				<label>USERNAME </label>
				<input class="form-control" name="user"  value="<?php echo $TAMPIL['username']; ?>">
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
				<input class="form-control" name="pass"   type="password" value="<?php echo $TAMPIL['password']; ?>">
			</div>
			<div class="form-group">
				<label>NAMA PENUMPANG</label>
				<input class="form-control" name="nama"  value="<?php echo $TAMPIL['nama_penumpang']; ?>">
			</div>
			<div class="form-group">
				<label>ALAMAT PENUMPANG</label>
				<input class="form-control" name="alamat"  value="<?php echo $TAMPIL['alamat_penumpang']; ?>">
			</div>
			<div class="form-group">
				<label>TANGGAL LAHIR</label>
				<input class="form-control" name="tgl"  value="<?php echo $TAMPIL['tanggal_lahir']; ?>">
			</div>
			<div class="form-group">
				<label>JENIS KELAMIN</label>
				<input class="form-control" name="jenis"  value="<?php echo $TAMPIL['jenis_kelamin']; ?>">
			</div>
			<div class="form-group">
				<label>TELEFONE</label>
				<input class="form-control" name="telefone"  value="<?php echo $TAMPIL['telefone']; ?>">
			</div>

			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>

<?php
	$ID_PENUMPANG = isset($_POST['id']) ? $_POST['id'] : null;
	$USERNAME = isset($_POST['user']) ? $_POST['user'] : null;
	$PASSWORD = isset($_POST['pass']) ? $_POST['pass'] : null;
	$NAMA_PENUMPANG = isset($_POST['nama']) ? $_POST['nama'] : null;
	$ALAMAT_PENUMPANG = isset($_POST['alamat']) ? $_POST['alamat'] : null;
	$TANGGAL_LAHIR = isset($_POST['tgl']) ? $_POST['tgl'] : null;
	$JENIS_KELAMIN = isset($_POST['jenis']) ? $_POST['jenis'] : null;
	$TELEFONE= isset($_POST['telefone']) ? $_POST['telefone'] : null;
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="UPDATE tb_penumpang SET
		id_penumpang='$ID_PENUMPANG',
		username='$USERNAME',
		password='$PASSWORD',
		nama_penumpang='$NAMA_PENUMPANG',
		alamat_penumpang='$ALAMAT_PENUMPANG',
		tanggal_lahir='$TANGGAL_LAHIR',
		jenis_kelamin='$JENIS_KELAMIN',
		telefone='$TELEFONE'
		
		WHERE id_penumpang ='$ID'";

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
		alert (" edit data berhasil di lakukan");
		window.location.href="?page=penumpang";
			</script>
			<?php

		}
	}
	?>
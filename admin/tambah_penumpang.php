

<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH PENUMPANG
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID PENUMPANG</label>
				<input class="form-control" name="id">
			</div>
			<div class="form-group">
				<label>USERNAME </label>
				<input class="form-control" name="user">
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
				<input class="form-control" name="pass" type"pass">
			</div>
			<div class="form-group">
				<label>NAMA PENUMPANG</label>
				<input class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>ALAMAT PENUMPANG</label>
				<input class="form-control" name="alamat">
			</div>
			<div class="form-group">
				<label>TANGGAL LAHIR</label>
				<input class="form-control" name="tgl" type="date">
			</div>
			<div class="form-group">
				<label>JENIS KELAMIN</label>
				<input class="form-control" name="jenis">
			</div>
			<div class="form-group">
				<label>TELEFONE</label>
				<input class="form-control" name="telefone">
			</div>
			
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
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
		$SQL ="INSERT INTO tb_penumpang SET
		id_penumpang='$ID_PENUMPANG',
		username='$USERNAME',
		password='$PASSWORD',
		nama_penumpang='$NAMA_PENUMPANG',
		alamat_penumpang='$ALAMAT_PENUMPANG',
		tanggal_lahir='$TANGGAL_LAHIR',
		jenis_kelamin='$JENIS_KELAMIN',
		telefone='$TELEFONE'
		";

		
		if(mysql_query($SQL,$KONEKSI)){
?>

			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="?page=penumpang";</script>
			<?php
		}
	}
	?>

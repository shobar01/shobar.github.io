<?php
	$ID=isset($_GET['id_petugas']) ? $_GET['id_petugas'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_petugas WHERE id_petugas='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<div class="panel panel-default">
	<div class="panel-heading">
TAMBAH DATA PETUGAS
	</div>
</div>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID Petugas</label>
				<input class="form-control" name="Id_petugas">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" name="Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" name="Password">
			</div>
			<div class="form-group">
				<label>Nama Petugas</label>
				<input class="form-control" name="Nama_petugas">
			</div>
			<div class="form-group">
				<label>ID Level</label>
				<input class="form-control" name="Id_level">
			</div>
			<input type="submit" name="Simpan" value="SIMPAN" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>
<?php
	$ID = isset($_POST['Id_petugas']) ? $_POST['Id_petugas'] : null;
	$USERNAME = isset($_POST['Username']) ? $_POST['Username'] : null;
	$PASSWORD = isset($_POST['Password']) ? $_POST['Password'] : null;
	$NAMA = isset($_POST['Nama_petugas']) ? $_POST['Nama_petugas'] : null;
	$IDLEVEL = isset($_POST['Id_level']) ? $_POST['Id_level'] : null;
	
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="INSERT INTO tb_petugas SET
		id_petugas='$ID',
		username='$USERNAME',
		password='$PASSWORD',
		nama_petugas='$NAMA',
		id_level='$IDLEVEL',
		";


		(mysql_query($SQL,$KONEKSI));

		$SQL ="INSERT INTO tb_petugas SET
		username='$USERNAME',
		password='$PASSWORD',
		id_level='$NAMA',
		id_level='$id_level'";		
		if(mysql_query($SQL,$KONEKSI)){
?>
			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="tampil_petugas.php?page=petugas";</script>
			<?php
		}
	}
	?>
<?php
	$ID=isset($_GET['id_petugas']) ? $_GET['id_petugas'] :null;
	include("../inc/koneksi.php");
	$SQL = mysql_query("SELECT * FROM tb_petugas WHERE id_petugas='$ID'");
	$TAMPIL = mysql_fetch_array($SQL);
?>
<title>TICKETING</title>
<h2>FORM EDIT PETUGAS</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>ID Petugas</label>
				<input class="form-control" name="Id_petugas" value="<?php echo $TAMPIL['id_petugas']; ?>">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" name="Username" value="<?php echo $TAMPIL['username']; ?>">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" name="Password" value="<?php echo $TAMPIL['password']; ?>">
			</div>
			<div class="form-group">
				<label>Nama Petugas</label>
				<input class="form-control" name="Nama_petugas" value="<?php echo $TAMPIL['nama_petugas']; ?>">
			</div>
			<div class="form-group">
				<label>ID Level</label>
				<input class="form-control" name="Id_level" value="<?php echo $TAMPIL['id_level']; ?>">
			</div>
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
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
		$SQL ="UPDATE tb_petugas SET
		id_petugas='$ID',
		username='$USERNAME',
		password='$PASSWORD',
		nama_petugas='$NAMA',
		id_level='$IDLEVEL'
		
		WHERE id_petugas ='$ID'";

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
		alert (" edit data berhasil di lakukan");
		window.location.href="?page=petugas";
			</script>
			<?php

		}
	}
	?>
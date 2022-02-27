<!-- session untuk login -->
<?php
session_start ();
include "../inc/koneksi.php";
$PAGE = isset ($_GET['page']) ? $_GET['page'] :null;
$AKSI = isset ($_GET['aksi']) ? $_GET['aksi'] :null;
if (@$_SESSION['username']){
	if(@$_SESSION['id_level']=="1") {header("location:../Admin/index.php");}
	elseif (@$_SESSION['id_level']=="2") {header("location:../petugas/index.php");}
	elseif (@$_SESSION['id_level']=="3") {header("location:../Penumpang/index.php");}
	elseif (@$_SESSION['id_level']=="4") {header("location:../pendaftar/index.php");}
}

?>
<!-- Akhir session untuk memfilter hak aksess -->


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="form-signin" method="POST">
				<center><h3><font color="black">REGISTRASI</font></h3></center>

        <hr></hr>
<label for="inputPassword" class="sr-only">id petugas</label>
        <input type="text" name="Idp" class="form-control" placeholder="ID PETUGAS" required>
        <br>
        <label for="inputPassword" class="sr-only">username</label>
        <input type="text" name="Use" class="form-control" placeholder="USERNAME" required>
        <br>
        <label for="inputPassword" class="sr-only">password</label>
        <input type="password" name="Pas" class="form-control" placeholder="PASSWORD" required>
        <br>


        <label for="inputPassword" class="sr-only">nama_petugas</label>
        <input type="text" name="Nap" class="form-control" placeholder="Nama Petugas" required>
        <br>
        <label for="inputPassword" class="sr-only">id level</label>
        <input type="number" name="Idl" class="form-control" placeholder="ID LEVEL" required>
        <input type="submit" name="Simpan" value="SIMPAN" class="btn btn-lg btn-primary btn-block">
        <br>
        <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
      </form>

			</div>
		</div>
	</div>
	


<?php
	$IDP = isset($_POST['Idp']) ? $_POST['Idp'] : null;
	$USE = isset($_POST['Use']) ? $_POST['Use'] : null;	
	$PAS = isset($_POST['Pas']) ? $_POST['Pas'] : null;
	$NAP = isset($_POST['Nap']) ? $_POST['Nap'] : null;
	$IDL = isset($_POST['Idl']) ? $_POST['Idl'] : null;
	$SIMPAN= isset($_POST['Simpan']);

	include ("../inc/koneksi.php");
	if($SIMPAN){
		$SQL ="INSERT INTO tb_petugas SET
		id_petugas='$IDP',
		username='$USE',
		password='$PAS',
		nama_petugas='$NAP',
		id_level='$IDL'";


		
		if(mysql_query($SQL,$KONEKSI)){
?>
			<script type="text/javascript">
		alert (" tambah data berhasil di lakukan");
		window.location.href="login.php";</script>
			<?php
		}
	}
	?>
		<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
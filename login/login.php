<!-------/awal session untuk melihat hak akses-->
<?php
session_start();
include "../inc/koneksi.php";
$PAGE = isset($_GET['page']) ? $_GET['page'] : null;
$AKSI = isset($_GET['aksi']) ? $_GET['aksi'] : null;
if (@$_SESSION['username'])
{
 if  (@$_SESSION['id_level']=="1"){header("location:../admin/index.php");}
   else if (@$_SESSION['id_level']=="2"){header("location:../petugas/index.php");}
   else if (@$_SESSION['id_level']=="3"){header("location:../penumpang/index.php");}
   else if (@$_SESSION['id_level']=="pendaftar"){header("location:../index.php");}
}
?>

<!-------/akhir session untuk melihat hak akses-->


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Aplikasi Ticketing</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<h2><font color="#4682B4">Login Ticketing</font></h2>
				</span>
				<form class="form-signin" method="POST">
	<?php
  if (@$_POST['masuk'])
  {
    include 'cek_login.php';
  }
?>
	 <label for="inputuser" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
        <br>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="masuk" value="Masuk">
        <a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
      </form>
      <?php
  if (@$_POST['Register'])
  {
    include 'register.php';
  }
?>
			</div>
		</div>
	</div>
	

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
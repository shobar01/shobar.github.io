<?php
session_start();
include '../inc/koneksi.php';
$user = addslashes($_POST['username']);
$pass = addslashes($_POST['password']);
$query = mysql_query("SELECT * FROM `tb_petugas` WHERE `username`='$user' AND `password`='$pass'");
$hasil = mysql_num_rows($query);
$data = mysql_fetch_array($query);
if($hasil==1)
{
	$_SESSION['username']=$data['username'];
	$_SESSION['id_level']=$data['id_level'];

	if ($data['id_level']=="1"){header("location:../admin/index.php");}
  else if ($data['id_level']=="2"){header("location:../petugas/index.php");}
  else if ($data['id_level']=="3"){header("location:../penumpang/index.php");}
  else if ($data['id_level']=="pendaftar"){header("location:../index.php");}
}
else
{
?>
<center>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>MAAF!</strong> PASWORD SALAH MOHON CEK KEMBALI ATAU TANYAKAN KEPADA PIHAK IT 
</div>
</center> 
<?php
}
?>
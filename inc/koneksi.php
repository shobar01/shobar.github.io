<?php 
$SERVER="localhost";
$USE1="root";
$PAS1="";
$DATABASE="db_p2_shobar";
$KONEKSI=mysql_connect($SERVER,$USE1,$PAS1);
$PILIH= mysql_select_db($DATABASE);

// koneksi ke server
if (! $KONEKSI) {
	echo "Koneksi Gagal maning bro, coba aktifkan mysql...!";
	mysql_error();
	}
// koneksi ke database pada server
if (! $PILIH) {
	echo "Databe tidak ada, coba periksa database anda...!";
	mysql_error();
	}
?>
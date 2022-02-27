<?php

	$ID=isset($_GET['id_pemesanan']) ? $_GET['id_pemesanan'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_pemesanan where id_pemesanan = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=pemesanan";


	</script>
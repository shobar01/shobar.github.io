<?php

	$ID=isset($_GET['id_rute']) ? $_GET['id_rute'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_rute where id_rute = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=rute";


	</script>
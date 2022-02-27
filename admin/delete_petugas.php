<?php

	$ID=isset($_GET['id_petugas']) ? $_GET['id_petugas'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_petugas where id_petugas = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=petugas";


	</script>
<?php

	$ID=isset($_GET['id_level']) ? $_GET['id_level'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_level where id_level = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=level";


	</script>
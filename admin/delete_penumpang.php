<?php

	$ID=isset($_GET['id_penumpang']) ? $_GET['id_penumpang'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_penumpang where id_penumpang = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=penumpang";


	</script>
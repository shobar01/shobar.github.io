<?php

	$ID=isset($_GET['id_transportasi']) ? $_GET['id_transportasi'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_transportasi where id_transportasi = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=transportasi";


	</script>
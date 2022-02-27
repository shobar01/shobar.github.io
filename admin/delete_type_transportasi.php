<?php

	$ID=isset($_GET['id_type_transportasi']) ? $_GET['id_type_transportasi'] : null;
	include("../inc/koneksi.php");

	mysql_query("DELETE from tb_type_transportasi where id_type_transportasi = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="?page=type";


	</script>
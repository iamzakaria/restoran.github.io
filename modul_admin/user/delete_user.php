<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	mysqli_query($connection,"DELETE FROM user WHERE iduser='$kode'");
	header("location:media_admin.php?module=user");
?>
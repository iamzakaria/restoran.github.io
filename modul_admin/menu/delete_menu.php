<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	mysqli_query($connection,"DELETE FROM menu WHERE idmenu='$kode'");
	header("location:media_admin.php?module=menu");
?>
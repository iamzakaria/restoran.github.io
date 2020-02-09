<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	mysqli_query($connection,"DELETE FROM pesanan WHERE idpesanan='$kode'");
	header("location:media_admin.php?module=pesanan");
?>
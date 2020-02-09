<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	mysqli_query($connection,"DELETE FROM transaksi WHERE idtransaksi='$kode'");
	header("location:media_admin.php?module=transaksi");
?>
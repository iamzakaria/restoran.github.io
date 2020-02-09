<?php
	include "koneksi.php";

	$idtransaksi = $_POST['inputidtransaksi'];
	$idpesanan = $_POST['inputidpesanan'];
	$idmenu = $_POST['inputidmenu'];
	$jumlahporsi = $_POST['inputjumlahporsi'];
	$jumlahbayar = $_POST['inputjumlahbayar'];
	$query = "INSERT into transaksi values ('$idtransaksi','$idpesanan','$idmenu','$jumlahporsi','$jumlahbayar')";
	
	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location='media_admin.php?module=transaksi';
	</script>

<?php
	}else{
?>
	<script>
		alert('Gagal di tambahkan!');
		location='media_admin.php?module=transaksi';
	</script>
<?php
	}
?>
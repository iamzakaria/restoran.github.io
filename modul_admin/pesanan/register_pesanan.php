<?php
	include "koneksi.php";

	$idpesanan = $_POST['inputidpesanan'];
	$iduser = $_POST['inputiduser'];
	$idpelanggan = $_POST['inputidpelanggan'];
	$totalporsi = $_POST['inputtotalporsi'];
	$totalbayar = $_POST['inputtotalbayar'];
	$query = "INSERT into pesanan values ('$idpesanan','$iduser','$idpelanggan','$totalporsi','$totalbayar')";
	
	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location='media_admin.php?module=pesanan';
	</script>

<?php
	}else{
?>
	<script>
		alert('Gagal di tambahkan!');
		location='media_admin.php?module=pesanan';
	</script>
<?php
	}
?>
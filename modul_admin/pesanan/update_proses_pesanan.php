<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$idpesanan = $_POST['inputidpesanan'];
	$iduser = $_POST['inputiduser'];
	$idpelanggan = $_POST['inputidpelanggan'];
	$totalporsi = $_POST['inputtotalporsi'];
	$totalbayar = $_POST['inputtotalbayar'];
	$query = "UPDATE pesanan SET 
		idpesanan='$idpesanan',
		iduser='$iduser',
		idpesanan='$idpesanan',
		totalporsi='$totalporsi',
		totalbayar='$totalbayar'
		 WHERE idpesanan='$kode'";

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
			location='media_admin.php?module=update_pesanan';
		</script>
<?php
		}
?>

<?php
	include "koneksi.php";

	$idpelanggan = $_POST['inputidpelanggan'];
	$namapelanggan = $_POST['inputnamapelanggan'];
	$jeniskelamin = $_POST['inputjeniskelamin'];
	$nohp = $_POST['inputnohp'];
	$alamat = $_POST['inputalamat'];
	$query = "INSERT into pelanggan values ('$idpelanggan','$namapelanggan','$jeniskelamin','$nohp','$alamat')";
	
	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location='media_admin.php?module=pelanggan';
	</script>

<?php
	}else{
?>
	<script>
		alert('Gagal di tambahkan!');
		location='media_admin.php?module=pelanggan';
	</script>
<?php
	}
?>
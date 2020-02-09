<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$idpelanggan = $_POST['inputidpelanggan'];
	$namapelanggan = $_POST['inputnamapelanggan'];
	$jeniskelamin = $_POST['inputjeniskelamin'];
	$nohp = $_POST['inputnohp'];
	$alamat = $_POST['inputalamat'];
	$query = "UPDATE pelanggan SET 
		idpelanggan='$idpelanggan',
		namapelanggan='$namapelanggan',
		jeniskelamin='$jeniskelamin',
		nohp='$nohp',
		alamat='$alamat'
		 WHERE idpelanggan='$kode'";

	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>
		<script>
			alert('Data berhasil di diupdate!');
			location='media_admin.php?module=pelanggan';
		</script>

<?php
		}else{
?>
		<script>
			alert('Gagal di update!');
			location='media_admin.php?module=update_pelanggan';
		</script>
<?php
		}
?>

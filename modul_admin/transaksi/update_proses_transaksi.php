<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$idpelanggan = $_POST['inputidpelanggan'];
	$nometer = $_POST['inputnometer'];
	$nama = $_POST['inputnama'];
	$alamat = $_POST['inputalamat'];
	$kodetarif = $_POST['inputkodetarif'];
	$query = "UPDATE pelanggan SET 
		IdPelanggan='$idpelanggan',
		NoMeter='$nometer',
		Nama='$nama',
		Alamat='$alamat',
		KodeTarif='$kodetarif'
		 WHERE IdPelanggan='$kode'";

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

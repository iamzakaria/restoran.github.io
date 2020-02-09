<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$idmenu=$_POST['inputidmenu'];
	$namamenu=$_POST['inputnamamenu'];
	$harga=$_POST['inputharga'];
	$query = "UPDATE menu SET idmenu='$idmenu', namamenu='$namamenu', harga='$harga' WHERE idmenu='$kode'";

	$cekquery = mysqli_query($connection,$query);
	if ($cekquery) {
?>

		<script>
			alert('Data berhasil di tambahkan!');
			location='media_admin.php?module=menu';
		</script>

<?php
		}else{
?>
		<script>
			alert('Gagal di tambahkan!');
			location='media_admin.php?module=menu';
		</script>
<?php
		}
?>

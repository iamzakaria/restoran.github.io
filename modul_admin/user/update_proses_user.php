<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$iduser = $_POST['inputiduser'];
	$namauser = $_POST['inputnamauser'];
	$password = $_POST['inputpassword'];
	$hakakses = $_POST['inputhakakses'];
	$query = "UPDATE user SET 
		iduser='$iduser',
		namauser='$namauser',
		password='$password',
		hakakses='$hakakses',
		 WHERE iduser='$kode'";

	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>
		<script>
			alert('Data berhasil di tambahkan!');
			location='media_admin.php?module=user';
		</script>

<?php
		}else{
?>
		<script>
			alert('Gagal di tambahkan!');
			location='media_admin.php?module=user';
		</script>
<?php
		}
?>

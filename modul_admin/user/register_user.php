<?php
	include "koneksi.php";

	$iduser = $_POST['inputiduser'];
	$namauser = $_POST['inputnamauser'];
	$password = $_POST['inputpassword'];
	$hakakses = $_POST['inputhakakses'];
	$query = "INSERT into user values ('$iduser','$namauser','$password','$hakakses')";
	
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
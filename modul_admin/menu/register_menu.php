<?php
	include "koneksi.php";

	$idmenu = $_POST['inputidmenu'];
	$namamenu = $_POST['inputnamamenu'];
	$harga = $_POST['inputharga'];
	$query = "INSERT into menu values('$idmenu', '$namamenu', '$harga')";
	
	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location='media_menu.php?module=menu';
	</script>

<?php
	}else{
?>
	<script>
		alert('Gagal di tambahkan!');
		location='media_menu.php?module=menu';
	</script>
<?php
	}
?>
<?php
	if(!isset($_SESSION['namauser'])){
		echo '
		<script language="javascript">
			alert("Anda harus Login!");
			document.location="../index.php";
		</script>';
	}
?>
<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	$queryEdit = mysqli_query($connection,"SELECT * FROM pelanggan where idpelanggan='$kode' limit 1")or die(mysqli_error());
	$dataEdit = mysqli_fetch_array($queryEdit);
?>
<div id="konten">
<h1>Data Pelanggan</h1>  
<form method="POST" action="media_admin.php?module=update_proses_pelanggan&amp;kode=<?php echo $dataEdit['idpelanggan'];?>" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">idpelanggan</td>
			<td>:</td>
			<td>
				<input type="text" name="inputidpelanggan" size="40%" value=<?php echo $dataEdit['idpelanggan'];?>>
			</td>
		</tr>
		<tr>
			<td width="20%">namapelangan</td>
			<td>:</td>
			<td><input type="text" name="inputnamapelanggan" size="40%" value=<?php echo $dataEdit['namapelanggan'];?>></td>
		</tr>
		<tr>
			<td width="20%">jeniskelamin</td>
			<td>:</td>
			<td><input type="text" name="inputjeniskelamin" size="40%" value=<?php echo $dataEdit['jeniskelamin'];?>></td>
		</tr>
		<tr>
			<td width="20%">nohp</td>
			<td>:</td>
			<td><input type="text" name="inputnohp" size="40%" value=<?php echo $dataEdit['nohp'];?>></td>
		</tr>
		<tr>
			<td width="20%">alamat</td>
			<td>:</td>
			<td><input type="text" name="inputalamat" size="40%" value=<?php echo $dataEdit['alamat'];?>></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="updatepelanggan" value="Update Pelanggan">
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
</form>



<table border="1" width="100%">
	<thead>
		<th>idpelanggan</th>
		<th>namapelanggan</th>
		<th>jeniskelamin</th>
		<th>nohp</th>
		<th>alamat</th>
		<th colspan="2">Aksi</th>
	</thead>
	<tbody>
		<?php
		if(isset($_POST['btncari'])){
				$kategori = $_POST['inputkategori'];
				$datacari = $_POST['inputcari'];
				$sql = mysqli_query($connection,"select * from pelanggan 
					inner join tarif on pelanggan.kodemenu= menu.kodemenu
					where $kategori LIKE '%$datacari%' 
					ORDER BY $kategori")or die (mysqli_error());
			}else{
				$sql = mysqli_query($connection,"select * from pelanggan 
					")or die (mysqli_error());
			}
			while($data=mysqli_fetch_array($sql)){  
		?>
		<tr>
			<td><?php echo $data['idpelanggan']; ?> </td>
			<td><?php echo $data['namapelanggan']; ?> </td>
			<td><?php echo $data['jeniskelamin']; ?> </td>
			<td><?php echo $data['nohp']; ?> </td>
			<td><?php echo $data['alamat']; ?> </td>
			<td><a href="media_admin.php?module=update_pelanggan&amp;kode=<?php echo $data['idpelanggan'];?>">Update</a></td>
			<td><a href="media_admin.php?module=delete_pelanggan&amp;kode=<?php echo $data['idpelanggan'];?>">Hapus</a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

<script type="text/javascript">
	function validasi(form){
		if (form.inputidpelanggan.value == ""){
	    	alert("Kode Pelanggan masih kosong!");
	    	form.inputidpelanggan.focus();
	    	return (false);
	  	}
	  	if(form.inputnamapelanggan.value == ""){
	    	alert("Nomor Meter masih kosong!");
	    	form.inputnamapelanggan.focus();
	    	return (false);
	  	}
	  	if(form.inputjeniskelamin.value == ""){
	    	alert("Nama Pelanggan masih kosong!");
	    	form.inputjeniskelamin.focus();
	    	return (false);
	  	}if(form.inputnohp.value == ""){
	    	alert("Alamat Pelanggan masih kosong!");
	    	form.inputnohp.focus();
	    	return (false);
	  	}if(form.inputalamat.value == ""){
	    	alert("alamat masih kosong!");
	    	form.inputalamat.focus();
	    	return (false);
	  	}
	  	return(true);;
	}
</script>
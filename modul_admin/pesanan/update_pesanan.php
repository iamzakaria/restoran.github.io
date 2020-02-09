<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	$queryEdit = mysqli_query($connection,"SELECT * FROM pesanan where idpesanan='$kode' limit 1")or die(mysqli_error());
	$dataEdit = mysqli_fetch_array($queryEdit);
?>
<div id="konten">
<h1>Data pesanan</h1>  
<form method="POST" action="media_admin.php?module=update_proses_pesanan&amp;kode=<?php echo $dataEdit['idpesanan'];?>" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">idpesanan</td>
			<td>:</td>
			<td>
				<input type="text" name="inputidpesanan" size="40%" value=<?php echo $dataEdit['idpesanan'];?>>
			</td>
		</tr>
		<tr>
			<td width="20%">iduser</td>
			<td>:</td>
			<td><input type="text" name="inputiduser" size="40%" value=<?php echo $dataEdit['iduser'];?>></td>
		</tr>
		<tr>
			<td width="20%">pesanan</td>
			<td>:</td>
			<td><input type="text" name="inputpesanan" size="40%" value=<?php echo $dataEdit['idpesanan'];?>></td>
		</tr>
		<tr>
			<td width="20%">totalporsi</td>
			<td>:</td>
			<td><input type="text" name="inputtotalporsi" size="40%" value=<?php echo $dataEdit['totalporsi'];?>></td>
		</tr>
		<tr>
			<td width="20%">totalbayar</td>
			<td>:</td>
			<td><input type="text" name="inputtotalbayar" size="40%" value=<?php echo $dataEdit['totalbayar'];?>></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="updatePesanan" value="Update pesanan">
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
</form>


<br>
<form method="POST" action="" align="center" onsubmit="return validasi(this)">
	Pencarian :	
	<input type="text" name="inputcari" size="40%">
	Kategori :	
	<select name="inputkategori" style="width: 20%;">
		<option value="id_pelanggan">ID pesanan</option>
		<option value="nometer">iduser</option>
		<option value="nama">Nama</option>
		<option value="alamat">Alamat</option>
		<option value="daya">Daya</option>
	</select>
	<input name="btncari" type="submit" value="Cari" />
</form>
<br>

<table border="1" width="100%">
	<thead>
		<th>ID pesanan</th>
		<th>iduser</th>
		<th>idpelanggan</th>
		<th>tottalporsi</th>
		<th>totalbayar</th>
		<th colspan="2">Aksi</th>
	</thead>
	<tbody>
		<?php
		if(isset($_POST['btncari'])){
				$kategori = $_POST['inputkategori'];
				$datacari = $_POST['inputcari'];
				$sql = mysqli_query($connection,"select * from pesanan 
					inner join tarif on pesanan.KodeTarif = tarif.KodeTarif 
					where $kategori LIKE '%$datacari%' 
					ORDER BY $kategori")or die (mysqli_error());
			}else{
				$sql = mysqli_query($connection,"select * from pesanan 
					")or die (mysqli_error());
			}
			while($data=mysqli_fetch_array($sql)){  
		?>
		<tr>
			<td><?php echo $data['idpesanan']; ?> </td>
			<td><?php echo $data['iduser']; ?> </td>
			<td><?php echo $data['idpelanggan']; ?> </td>
			<td><?php echo $data['totalporsi']; ?> </td>
			<td><?php echo $data['totalbayar']; ?> </td>
			<td><a href="media_admin.php?module=update_pesanan&amp;kode=<?php echo $data['idpesanan'];?>">Update</a></td>
			<td><a href="media_admin.php?module=delete_pesanan&amp;kode=<?php echo $data['idpesanan'];?>">Hapus</a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

<script type="text/javascript">
	function validasi(form){
		if (form.inputIdPelanggan.value == ""){
	    	alert("Kode Pelanggan masih kosong!");
	    	form.inputkIdPelanggan.focus();
	    	return (false);
	  	}
	  	if(form.inputNoMeter.value == ""){
	    	alert("Nomor Meter masih kosong!");
	    	form.inputNoMeter.focus();
	    	return (false);
	  	}
	  	if(form.inputNama.value == ""){
	    	alert("Nama Pelanggan masih kosong!");
	    	form.inputNama.focus();
	    	return (false);
	  	}if(form.inputAlamat.value == ""){
	    	alert("Alamat Pelanggan masih kosong!");
	    	form.inputAlamat.focus();
	    	return (false);
	  	}if(form.inputKodeTarif.value == ""){
	    	alert("Daya masih kosong!");
	    	form.inputKodeTarif.focus();
	    	return (false);
	  	}
	  	return(true);;
	}
</script>
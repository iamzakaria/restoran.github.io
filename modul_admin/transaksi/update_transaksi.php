<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	$queryEdit = mysqli_query($connection,"SELECT * FROM pelanggan where id_pelanggan='$kode' limit 1")or die(mysqli_error());
	$dataEdit = mysqli_fetch_array($queryEdit);
?>
<div id="konten">
<h1>Data Pelanggan</h1>  
<form method="POST" action="media_admin.php?module=update_proses_pelanggan&amp;kode=<?php echo $dataEdit['id_pelanggan'];?>" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">Kode Pelanggan</td>
			<td>:</td>
			<td>
				<input type="text" name="inputid_pelanggan" size="40%" value=<?php echo $dataEdit['id_pelanggan'];?>>
			</td>
		</tr>
		<tr>
			<td width="20%">Nomor Meter</td>
			<td>:</td>
			<td><input type="text" name="inputnometer" size="40%" value=<?php echo $dataEdit['nometer'];?>></td>
		</tr>
		<tr>
			<td width="20%">Nama Pelanggan</td>
			<td>:</td>
			<td><input type="text" name="inputnama" size="40%" value=<?php echo $dataEdit['nama'];?>></td>
		</tr>
		<tr>
			<td width="20%">Alamat Pelanggan</td>
			<td>:</td>
			<td><input type="text" name="inputalamat" size="40%" value=<?php echo $dataEdit['alamat'];?>></td>
		</tr>
		<tr>
			<td width="20%">Daya</td>
			<td>:</td>
			<td>
				<select name="inputkodetarif" style="width: 70%;">
					<option value="" selected></option>
					<?php
						$sqlForeign = mysqli_query($connection,"SELECT * FROM tarif")or die(mysqli_error());
						while($dataForeign=mysqli_fetch_array($sqlForeign)){
					?>
					<option value=<?php echo $dataForeign['kodetarif']; ?> 
						<?php 
							if($dataEdit['kodetarif'] == $dataForeign['kodetarif']){
								echo "selected";
							} 
						?> 
					>
						<?php echo $dataForeign['daya'];?>
					</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="tambahPelanggan" value="Update Pelanggan">
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
		<option value="id_pelanggan">ID Pelanggan</option>
		<option value="nometer">Nomor</option>
		<option value="nama">Nama</option>
		<option value="alamat">Alamat</option>
		<option value="daya">Daya</option>
	</select>
	<input name="btncari" type="submit" value="Cari" />
</form>
<br>

<table border="1" width="100%">
	<thead>
		<th>ID Pelanggan</th>
		<th>Nomor</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Daya</th>
		<th colspan="2">Aksi</th>
	</thead>
	<tbody>
		<?php
		if(isset($_POST['btncari'])){
				$kategori = $_POST['inputkategori'];
				$datacari = $_POST['inputcari'];
				$sql = mysqli_query($connection,"select * from pelanggan 
					inner join tarif on pelanggan.KodeTarif = tarif.KodeTarif 
					where $kategori LIKE '%$datacari%' 
					ORDER BY $kategori")or die (mysqli_error());
			}else{
				$sql = mysqli_query($connection,"select * from pelanggan 
					inner join tarif on pelanggan.KodeTarif = tarif.KodeTarif 
					order by id_pxelanggan")or die (mysqli_error());
			}
			while($data=mysqli_fetch_array($sql)){  
		?>
		<tr>
			<td><?php echo $data['id_pelanggan']; ?> </td>
			<td><?php echo $data['nometer']; ?> </td>
			<td><?php echo $data['nama']; ?> </td>
			<td><?php echo $data['alamat']; ?> </td>
			<td><?php echo $data['daya']; ?> </td>
			<td><a href="media_admin.php?module=update_pelanggan&amp;kode=<?php echo $data['id_pelanggan'];?>">Update</a></td>
			<td><a href="media_admin.php?module=delete_pelanggan&amp;kode=<?php echo $data['id_pelanggan'];?>">Hapus</a></td>
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
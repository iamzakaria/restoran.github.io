<?php
	include "koneksi.php";
?>
<div id="konten">
<h1>Data pesanan</h1>  
<form method="POST" action="media_admin.php?module=register_pesanan" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">idpesanan</td>
			<td>:</td>
			<td>
				<input type="text" name="inputidpesanan" size="40%">
			</td>
		</tr>
		<tr>
			<td width="20%">iduser</td>
			<td>:</td>
			<td><input type="text" name="inputiduser" size="40%"></td>
		</tr>
		<tr>
			<td width="20%">idPelanggan</td>
			<td>:</td>
			<td><input type="text" name="inputidpelanggan" size="40%"></td>
		</tr>
		<tr>
			<td width="20%">totalporsi</td>
			<td>:</td>
			<td><input type="text" name="inputtotalporsi" size="40%"></td>
		</tr>
		<tr>
			<td width="20%">totalbayar</td>
			<td>:</td>
			<td><input type="text" name="inputtotalbayar" size="40%"></td>
		
			<td></td>
			<td></td>
			<td><input type="submit" name="tambahPelanggan" value="Tambah">
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
		<option value="IdPelanggan">ID Pelanggan</option>
		<option value="NoMeter">Nomor</option>
		<option value="Nama">Nama</option>
		<option value="Alamat">Alamat</option>
		<option value="Daya">Daya</option>
	</select>
	<input name="btncari" type="submit" value="Cari" />
	<a href="modul_admin/pesanan/laporan_pesanan.php" target="blank">print</a>
</form>
<br>

<table border="1" width="100%">
	<thead>
		<th>idpesanan</th>
		<th>iduser</th>
		<th>idpelanggan</th>
		<th>totalporsi</th>
		<th>totalbayar/</th>
		<th colspan="2">Aksi</th>
	</thead>
	<tbody>
		<?php
		if(isset($_POST['btncari'])){
				$kategori = $_POST['inputkategori'];
				$datacari = $_POST['inputcari'];
				$sql = mysqli_query($connection,"select * from pesanan 
					inner join tarif on pelanggan.KodeTarif = tarif.KodeTarif 
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
		if (form.inputidpesanan.value == ""){
	    	alert("Kode Pelanggan masih kosong!");
	    	form.inputkIdPesanan.focus();
	    	return (false);
	  	}
	  	if(form.inputiduser.value == ""){
	    	alert("Nomor Meter masih kosong!");
	    	form.inputiduser.focus();
	    	return (false);
	  	}
	  	if(form.inputidpelanggan.value == ""){
	    	alert("Nama Pelanggan masih kosong!");
	    	form.inputidpelanggan.focus();
	    	return (false);
	  	}if(form.inputtotalporsi.value == ""){
	    	alert("Alamat Pelanggan masih kosong!");
	    	form.inputtotalporsi.focus();
	    	return (false);
	  	}if(form.inputtotalbayar.value == ""){
	    	alert("Daya masih kosong!");
	    	form.inputtotalbayar.focus();
	    	return (false);
	  	}
	  	return(true);;
	}
</script>
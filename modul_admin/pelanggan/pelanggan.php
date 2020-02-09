<?php
	include "koneksi.php";
?>
<div id="konten">
<h1>Data Pelanggan</h1>  
<form method="POST" action="media_admin.php?module=register_pelanggan" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">idpelanggan</td>
			<td>:</td>
			<td>
				<input type="text" name="inputidpelanggan" size="40%">
			</td>
		</tr>
		<tr>
			<td width="20%">namapelanggan</td>
			<td>:</td>
			<td><input type="text" name="inputnamapelanggan" size="40%"></td>
		</tr>
		<tr>
			<td width="20%">jeniskelamin</td>
			<td>:</td>
			<td><input type="text" name="inputjeniskelamin" size="40%"></td>
		</tr>
		<tr>
			<td width="20%">nohp</td>
			<td>:</td>
			<td><input type="text" name="inputnohp" size="40%"></td>
		<tr>
			<td width="20%">alamat</td>
			<td>:</td>
			<td><input type="text" name="inputalamat" size="40%"></td>
				
			</td>
		</tr>
		<tr>
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
		<option value="idpelanggan">ID Pelanggan</option>
		<option value="namapelanggan">Nomor</option>
		<option value="jeniskelamin">Nama</option>
		<option value="nohp">Alamat</option>
		<option value="alamat">Daya</option>
	</select>
	<input name="btncari" type="submit" value="Cari" />
	<a href="modul_admin/pelanggan/laporan_pelanggan.php" target="blank">print</a>
</form>
<br>

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
					inner join menu on pelanggan.idmenu = menu.idmenu
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
	    	alert("idpelanggan masih kosong!");
	    	form.inputkIdPelanggan.focus();
	    	return (false);
	  	}
	  	if(form.inputnamapelanggan.value == ""){
	    	alert("namamenu masih kosong!");
	    	form.inputnamapelanggan.focus();
	    	return (false);
	  	}
	  	if(form.inputjeniskelamin.value == ""){
	    	alert("jeniskelamin masih kosong!");
	    	form.inputjeniskelamin.focus();
	    	return (false);
	  	}if(form.inputnohp.value == ""){
	    	alert("nohp Pelanggan masih kosong!");
	    	form.inputnohp.focus();
	    	return (false);
	  	}if(form.inputidmenu.value == ""){
	    	alert("Daya masih kosong!");
	    	form.inputidmenu.focus();
	   	return (false);
	  	}
	  	return(true);;
	}
</script>
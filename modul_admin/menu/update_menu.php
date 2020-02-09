<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	$queryEdit = mysqli_query($connection,"SELECT * FROM menu where idmenu='$kode' limit 1")or die(mysqli_error());
	$dataEdit = mysqli_fetch_array($queryEdit);
?>
<div id="konten">
<h1>data menu</h1>  
<form method="POST" action="media_admin.php?module=update_proses_menu&amp;kode=<?php echo $dataEdit['idmenu'];?>" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">idmenu</td>
			<td>:</td>
			<td>
				<input type="text" name="inputidmenu" size="40%" value=<?php echo $dataEdit['idmenu'];?>>
			</td>
		</tr>               
		<tr>
			<td width="20%">namamenu</td>
			<td>:</td>
			<td><input type="text" name="inputnamamenu" size="40%" value=<?php echo $dataEdit['namamenu'];?>></td>
		</tr>
		<tr>
			<td width="20%">harga</td>
			<td>:</td>
			<td><input type="text" name="inputharga" size="40%" value=<?php echo $dataEdit['inputharga'];?>></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="tambahmenu" value="Update menu">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
</form>

<br>
<form method="POST" action="" align="center" onsubmit="return validasi(this)">
	Pencarian :	
	<input type="text" name="inputcari" size="40%">
	Kategori :	
	<select name="inputkategori" style="width: 20%;">
		<option value="idmenu">idmenu</option>
		<option value="namamenu">nama Menu</option>
		<option value="harga">harga</option>
	</select>
	<input name="btncari" type="submit" value="Cari" />
</form>
<br>

<table border="1" width="100%">
	<thead>
		<th>idmenu</th>
		<th>namamenu</th>
		<th>harga</th>
		<th colspan="2">Aksi</th>
	</thead>
	<tbody>
		<?php
			if(isset($_POST['btncari'])){
				$kategori = $_POST['inputkategori'];
				$datacari = $_POST['inputcari'];
				$sql = mysqli_query($connection,"select * from menu 
					where $kategori LIKE '%$datacari%' 
					ORDER BY $kategori")or die (mysqli_error());
			}else{
				$sql = mysqli_query($connection,"select * from menu")or die (mysqli_error());
			}
			while($mydata=mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $mydata['idmenu']; ?> </td>
			<td><?php echo $mydata['namamenu']; ?> </td>
			<td><?php echo $mydata['harga']; ?> </td>
			<td><a href="media_admin.php?module=update_menu&amp;kode=<?php echo $mydata['idmenu'];?>">Update</a></td>
			<td><a href="media_admin.php?module=delete_menu&amp;kode=<?php echo $mydata['idmenu'];?>">Hapus</a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

<script type="text/javascript">
	function validasi(form){
		if (form.inputidmenu.value == ""){
	    	alert("id menu masih kosong!");
	    	form.inputidmenu.focus();
	    	return false;
	  	}
		if (form.inputnamamenu.value == ""){
	    	alert("Nama Menu masih kosong!");
	    	form.inputnamamenu.focus();
	    	return false;
	  	}
  		if (form.inputharga.value == ""){
	    	alert("Harga masih kosong!");
	    	form.inputharga.focus();
	    	return false;
	  	}
		return true;
	}
</script>
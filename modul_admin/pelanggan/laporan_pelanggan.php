<?php
include "../../koneksi.php";
$hasil2=mysqli_query($connection,"select * from menu order by idpelanggan");
$pageQry = mysqli_query($connection,"SELECT * FROM surat_keluar");
?>
<center><h2>Laporan Tarif</h2></center>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
  <td colspan="2">
	<table  class="table-list" width="100%" border="1" rules="all" bordercolor="#000000" cellspacing="1" cellpadding="3" >
    <tr>
      <th width="16%" bgcolor="#CCCCCC"><strong>idmenu</strong></th>
      <th width="16%" bgcolor="#CCCCCC"><strong>namamenu</strong></th>
      <th width="16%" bgcolor="#CCCCCC"><strong>harga</strong></th>
      <th width="16%" bgcolor="#CCCCCC"><strong>Alamat</strong></th>
      <th width="16%" bgcolor="#CCCCCC"><strong>Daya</strong></th>
    </tr>
    <script>
      window.print();
    </script>
    <?php
  	   # Jika tombol Cari/Search diklik, maka pencarian dilakukan
  	  if(isset($_POST['btnCari'])){
  		  $sql = "SELECT * FROM pelanggan WHERE idpelanggan LIKE '%$dataCari%' ORDER BY idpelanggan ";
  	  }
      else {
  		  $sql = "SELECT * FROM pelanggan INNER JOIN menu ON pelanggan.Kodemenu = menu.idmenu ORDER BY idpelanggan";
      } 
  	
      // Menjalankan query di atas
      $myquery = mysqli_query($connection,$sql)  or die ("Query salah : ".mysqli_error());

      while ($myData = mysqli_fetch_array($myquery)) {
      $Kode = $myData['idpelanggan'];
    ?>  
      <tr>
        <td> <?php echo $myData['idpelanggan']; ?></td>
        <td> <?php echo $myData['namapelanggan']; ?></td>
        <td> <?php echo $myData['jeniskelamin']; ?> </td>
        <td> <?php echo $myData['nohp']; ?> </td>
        <td> <?php echo $myData['alamat']; ?> </td>
      </tr>
    <?php } ?>
  </table>
</table>
<table width="100%" align="center" border="0">
  <tr>
    <td width="80%"></td>
    <td></td>
    <td>Admin</td>
  </tr>
<tr>
    <td width="80%"></td>
    <td></td>
    <td><br><br></td>
  </tr>
  <tr>
    <td width="80%"></td>
    <td></td>
    <td>(..........)</td>
  </tr>
</table>
<?php
    include "koneksi.php";
    $modul = $_GET['module'];
    if ($modul=='home'){
    	echo "<h2>Selamat Datang </h2>";
    	echo "Hai, <b>".$_SESSION['namauser']."</b> anda sebagai <b>".$_SESSION['hakakses']." </b> <b>Selamat datang, Di Sistem Informasi restoran elsa</b><br>";

        include "home.php";
    }
    else if ($modul=='menu'){
        include "modul_admin/menu/menu.php";
    }
    else if ($modul=='register_menu'){
        include "modul_admin/menu/register_menu.php";
    }
    else if ($modul=='update_menu'){
        include "modul_admin/menu/update_menu.php";
    }
    else if ($modul=='update_proses_menu'){
        include "modul_admin/menu/update_proses_menu.php";
    }
    else if ($modul=='delete_menu'){
        include "modul_admin/menu/delete_menu.php";
    }
    else if ($modul=='laporan_menu'){
        include "modul_admin/menu/laporan_menu.php";
    }
    else if ($modul=='pelanggan'){
        include "modul_admin/pelanggan/pelanggan.php";
    }
    else if ($modul=='register_pelanggan'){
        include "modul_admin/pelanggan/register_pelanggan.php";
    }
    else if ($modul=='update_pelanggan'){
        include "modul_admin/pelanggan/update_pelanggan.php";
    }
    else if ($modul=='update_proses_pelanggan'){
        include "modul_admin/pelanggan/update_proses_pelanggan.php";
    }
    else if ($modul=='delete_pelanggan'){
        include "modul_admin/pelanggan/delete_pelanggan.php";
    }
    else if ($modul=='laporan_pelanggan'){
        include "modul_admin/pelanggan/laporan_pelanggan.php";
    }
    else if ($modul=='pesanan'){
        include "modul_admin/pesanan/pesanan.php";
    }
    else if ($modul=='register_pesanan'){
        include "modul_admin/pesanan/register_pesanan.php";
    }
    else if ($modul=='update_pesanan'){
        include "modul_admin/pesanan/update_pesanan.php";
    }
    else if ($modul=='update_proses_pesanan'){
        include "modul_admin/pesanan/update_proses_pesanan.php";
    }
    else if ($modul=='delete_pesanan'){
        include "modul_admin/pesanan/delete_pesanan.php";
    }
    else if ($modul=='laporan_pesanan'){
        include "modul_admin/penggunaan/laporan_penggunaan.php";
    }
      else if ($modul=='transaksi'){
        include "modul_admin/transaksi/transaksi.php";
    }
    else if ($modul=='register_transaksi'){
        include "modul_admin/transaksi/register_transaksi.php";
    }
    else if ($modul=='update_transaksi'){
        include "modul_admin/transaksi/update_transaksi.php";
    }
    else if ($modul=='update_proses_transaksi'){
        include "modul_admin/transaksi/update_proses_transaksi.php";
    }
    else if ($modul=='delete_transaksi'){
        include "modul_admin/transaksi/delete_transaksi.php";
    }
    else if ($modul=='laporan_transaksi'){
        include "modul_admin/penggunaan/laporan_penggunaan.php";
    }
    else if ($modul=='user'){
        include "modul_admin/user/user.php";
    }
    else if ($modul=='register_user'){
        include "modul_admin/user/register_user.php";
    }
    else if ($modul=='update_user'){
        include "modul_admin/user/update_user.php";
    }
    else if ($modul=='update_proses_user'){
        include "modul_admin/user/update_proses_user.php";
    }
    else if ($modul=='delete_user'){
        include "modul_admin/user/delete_user.php";
    }
    else if ($modul=='laporan_user'){
        include "modul_admin/user/laporan_user.php";
    }
    else if ($modul=='pembayaran'){
        include "modul_admin/pembayaran/pembayaran.php";
    }
    else if ($modul=='register_pembayaran'){
        include "modul_admin/pembayaran/register_pembayaran.php";
    }
    else if ($modul=='update_pembayaran'){
        include "modul_admin/pembayaran/update_pembayaran.php";
    }
    else if ($modul=='update_proses_pembayaran'){
        include "modul_admin/pembayaran/update_proses_pembayaran.php";
    }
    else if ($modul=='delete_pembayaran'){
        include "modul_admin/pembayaran/delete_pembayaran.php";
    }
    else if ($modul=='laporan_pembayaran'){
        include "modul_admin/pembayaran/laporan_pembayaran.php";
    } else{
        echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP SILAHKAN BUAT SENDIRI</b>";
    }
?>
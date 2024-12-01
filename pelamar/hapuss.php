<?php
session_start();  // Mulai sesi
include("../config.php"); 

// Periksa apakah ada ID yang dikirim melalui URL
if (isset($_GET['pelamar_id'])){
    //Ambil ID dari URL
    $pelamar_id = $_GET['pelamar_id'];

// buat query untuk menghapus data pekerjaan berdasarkan ID
   $sql ="DELETE FROM pelamar WHERE pelamar_id=$pelamar_id";
   $query = mysqli_query($db, $sql);

   // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
   if ($query){
    $_SESSION['notifikasi'] = "Data pekerja Berhasil Di Hapus";
   }else{
    $_SESSION['notifikasi'] = "Data pekerja Gagal Di Hapus";
   }
    
   // Alihkan ke halaman index.php
   header("Location: index.php");
}else{
    // Jika akses langsung tanpa ID, tapilkan pesan error
    die("Akses ditolak...");
}
?>
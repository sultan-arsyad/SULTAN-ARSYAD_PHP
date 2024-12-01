<?php
session_start(); // Mulai sesi
include("../config.php");

// Periksa apakah tombol "simpan" pada form edit ditekan
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $pelamar_id = $_POST['pelamar_id'];
    $nama_pelamar = $_POST['nama_pelamar'];
    $email = $_POST['email'];
  

    // Buat query untuk memperbarui data pekerjaan
    $sql = "UPDATE pelamar SET
            nama_pelamar='$nama_pelamar',
            email='$email'
           
            WHERE pelamar_id=$pelamar_id";

    $query = mysqli_query($db, $sql);
    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data pelamar berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data pelamar gagal diperbarui!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>
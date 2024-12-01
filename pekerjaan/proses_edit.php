<?php
session_start(); // Mulai sesi
include("../config.php");

// Periksa apakah tombol "simpan" pada form edit ditekan
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $pekerjaan_id = $_POST['pekerjaan_id'];
    $nama_pekerjaan = $_POST['nama_pekerjaan'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
   $alamat = $_POST['alamat'];

    // Buat query untuk memperbarui data pekerjaan
    $sql = "UPDATE pekerjaan SET
            nama_pekerjaan='$nama_pekerjaan',
            nama_perusahaan='$nama_perusahaan',
            alamat='$alamat'
            WHERE pekerjaan_id=$pekerjaan_id";

    $query = mysqli_query($db, $sql);
    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data pekerja berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data pekerja gagal diperbarui!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>
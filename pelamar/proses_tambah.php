<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include("../config.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input
       dan menyimpannya ke dalam variabel */
    $nama_pelamar = $_POST['nama_pelamar'];
    $email = $_POST['email'];
   

    // Menyusun query SQL untuk menambahkan data ke tabel 'pekerjaan'
    $sql = "INSERT INTO pelamar 
            (nama_pelamar,email)
            VALUES ('$nama_pelamar', '$email')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data pelamar berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data pelamar gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>
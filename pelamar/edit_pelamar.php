<?php
// Termasuk file konfigurasi
include("../config.php");

// Mengambil ID pekerjaan dari parameter URL
$pelamar_id = $_GET['pelamar_id'];

// Mengambil data pekerjaan dari database berdasarkan ID
$query = $db->query("SELECT * FROM pelamar WHERE pelamar_id = '$pelamar_id'");
$pelamar = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelamar Pekerja</title>
</head>
<body>
    <h3>Edit Data pelamar</h3>
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="pelamar_id" value="<?php echo $pelamar['pelamar_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Pelamar</td>
                <td>
                    <input type="text" name="nama_pelamar" value="<?php echo $pelamar['nama_pelamar']; ?>" required>
                </td>
</tr>
            <tr>
                <td>email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $pelamar['email']; ?>" required>
                </td>
            
            
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>

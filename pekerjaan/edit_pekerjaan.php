<?php
// Termasuk file konfigurasi
include("../config.php");

// Mengambil ID pekerjaan dari parameter URL
$pekerjaan_id = $_GET['pekerjaan_id'];

// Mengambil data pekerjaan dari database berdasarkan ID
$query = $db->query("SELECT * FROM pekerjaan WHERE pekerjaan_id = '$pekerjaan_id'");
$pekerjaan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pekerjaan Pekerja</title>
</head>
<body>
    <h3>Edit Data pekerja</h3>
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="pekerjaan_id" value="<?php echo $pekerjaan['pekerjaan_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Pekerjaan</td>
                <td>
                    <input type="text" name="nama_pekerjaan" value="<?php echo $pekerjaan['nama_pekerjaan']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td>
                    <input type="text" name="nama_perusahaan" value="<?php echo $pekerjaan['nama_perusahaan']; ?>" required>
                </td>
            </tr>
            
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat"><?php echo $pekerjaan['alamat']; ?></textarea>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>

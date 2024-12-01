<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pelamar</title>
</head>
<body>
    <h3>Tambah Data</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Pelamar</td>
                <td><input type="text" name="nama_pelamar" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" required></td>
          
            </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>
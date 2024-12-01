<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pekerjaan</title>
</head>
<body>
    <h3>Tambah Data</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Pekerjaan</td>
                <td><input type="text" name="nama_pekerjaan" required></td>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td><input type="text" name="nama_perusahaan" required></td>
          
           
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Tambah Mahasiswa</h1>
        <a href="index.php" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>

        <form action="proses_tambah_mahasiswa.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Mahasiswa:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi:</label>
                <input type="text" class="form-control" id="prodi" name="prodi" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
        </form>
    </div>
</body>

</html>
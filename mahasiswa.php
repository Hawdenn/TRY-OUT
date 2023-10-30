<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menu Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Menu Mahasiswa</h1>
        <a href="index.php" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Data Mahasiswa (dapat disimulasikan)
                $mahasiswas = [
                    ['Nama Mahasiswa 1', '123456', 'Teknik Informatika'],
                    ['Nama Mahasiswa 2', '789012', 'Manajemen Bisnis']
                    // ...tambahkan data mahasiswa lainnya sesuai kebutuhan
                ];

                // Menampilkan data mahasiswa
                $no = 1;
                foreach ($mahasiswas as $mahasiswa) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $mahasiswa[0] . "</td>";
                    echo "<td>" . $mahasiswa[1] . "</td>";
                    echo "<td>" . $mahasiswa[2] . "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
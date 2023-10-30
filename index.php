<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #333;
        color: #eee;
        padding-top: 20px;
        position: relative;
    }



    .navbar {
        background-color: #222;
        border-bottom: 1px solid #444;
        position: relative;
        margin-top: 5px;
        /* Menambah margin-top untuk menggeser header ke atas */
    }

    .navbar-nav .nav-link {
        color: #eee;
    }

    .navbar-nav .nav-link:hover {
        color: #fff;
    }

    .btn-logout {
        background-color: #dc3545;
        border: none;
        color: #fff;
        padding: 8px 12px;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-logout:hover {
        background-color: #c82333;
    }

    .dashboard-title {
        position: absolute;
        top: 8px;
        left: 20px;
    }

    .card {
        background-color: #444;
        /* Menyesuaikan latar belakang card */
        color: #eee;
        /* Warna teks pada card */
        margin-top: 20px;
    }

    .card-body {
        padding: 20px;
    }
    </style>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <h1 class="dashboard-title">Dashboard</h1>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="mahasiswa.php">Menu Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link btn-logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Mahasiswa</h5>
                        <p class="card-text" style="color: #eee;">
                            <?php
                            // Data Mahasiswa (dapat disimulasikan)
                            $total_mahasiswa = 50; // Ganti dengan jumlah mahasiswa yang sesuai
                            echo $total_mahasiswa;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
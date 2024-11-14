<?php
session_start();

if (!isset($_SESSION['role'])) {
    header('Location: login.php');  // Jika tidak login, arahkan ke halaman login
    exit;
}

$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Input Data Akademik</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Styling */
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <h3>Input Data</h3>
        <!-- Menampilkan menu berdasarkan role -->
        <a href="#" onclick="showSection('mahasiswa_input')">Input Mahasiswa</a>
        <a href="#" onclick="showSection('matakuliah_input')">Input Mata Kuliah</a>
        <a href="#" onclick="showSection('dosen_input')">Input Dosen</a>

        <?php if ($role == 'dosen') { ?>
            <a href="#" onclick="showSection('krsnil_input')">Input Nilai (KRSNIL)</a>
        <?php } ?>

        <h3>Tampilkan Data</h3>
        <a href="#" onclick="showSection('mahasiswa_display')">Data Mahasiswa</a>
        <a href="#" onclick="showSection('matakuliah_display')">Data Mata Kuliah</a>
        <a href="#" onclick="showSection('krsnil_display')">Data KRS Nilai</a>
        <a href="#" onclick="showSection('dosen_display')">Data Dosen</a>
    </div>

    <div class="main-content">
        <!-- Form Input Data Mahasiswa -->
        <div id="mahasiswa_input" class="form-section active">
            <h2>Input Data Mahasiswa</h2>
            <form action="submit_mahasiswa.php" method="POST">
                <!-- Form input mahasiswa -->
            </form>
        </div>

        <!-- Form Input Data Mata Kuliah -->
        <div id="matakuliah_input" class="form-section">
            <!-- Form input mata kuliah -->
        </div>

        <!-- Form Input Data KRS Nilai (Hanya untuk Dosen) -->
        <?php if ($role == 'dosen') { ?>
            <div id="krsnil_input" class="form-section">
                <h2>Input Data KRS Nilai</h2>
                <form action="submit_krsnil.php" method="POST">
                    <!-- Form input KRS Nilai -->
                </form>
            </div>
        <?php } ?>

        <!-- Display Data Mahasiswa, Mata Kuliah, Dosen, dan KRS Nilai -->
        <div id="mahasiswa_display" class="form-section">
            <h2>Data Mahasiswa</h2>
            <!-- Tampilkan data mahasiswa -->
        </div>

        <div id="matakuliah_display" class="form-section">
            <h2>Data Mata Kuliah</h2>
            <!-- Tampilkan data mata kuliah -->
        </div>

        <div id="krsnil_display" class="form-section">
            <h2>Data KRS Nilai</h2>
            <!-- Tampilkan data KRS Nilai -->
        </div>

        <div id="dosen_display" class="form-section">
            <h2>Data Dosen</h2>
            <!-- Tampilkan data dosen -->
        </div>
    </div>
</body>
</html>

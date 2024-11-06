<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Input Data Akademik</title>
    <style>
        /* Tambahkan gaya Anda yang sudah ada di sini */
        body {
            display: flex;
        }
        .sidebar {
            width: 200px;
            padding: 10px;
            background-color: #f4f4f4;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
    </style>
    <script>
        function showSection(sectionId) {
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <h3>Input Data</h3>
        <a href="#" onclick="showSection('mahasiswa_input')">Input Mahasiswa</a>
        <a href="#" onclick="showSection('matakuliah_input')">Input Mata Kuliah</a>
        <a href="#" onclick="showSection('dosen_input')">Input Dosen</a>
        <a href="#" onclick="showSection('krs_input')">Input KRS</a>
        <a href="#" onclick="showSection('krsnil_input')">Input Nilai (KRSNIL)</a>

        <h3>Tampilkan Data</h3>
        <a href="#" onclick="showSection('mahasiswa_display')">Data Mahasiswa</a>
        <a href="#" onclick="showSection('matakuliah_display')">Data Mata Kuliah</a>
        <a href="#" onclick="showSection('krsnil_display')">Data KRS Nilai</a>
    </div>

    <div class="main-content">
        <!-- Form Input Data Mahasiswa -->
        <div id="mahasiswa_input" class="form-section active">
            <h2>Input Data Mahasiswa</h2>
            <form action="submit_mahasiswa.php" method="POST">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
                
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
                
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                
                <label for="asal_sma">Asal SMA:</label>
                <input type="text" id="asal_sma" name="asal_sma" required>
                
                <button type="submit">Simpan</button>
            </form>
        </div>

        <!-- Form Input Data Mata Kuliah -->
        <div id="matakuliah_input" class="form-section">
            <h2>Input Data Mata Kuliah</h2>
            <form action="submit_matakuliah.php" method="POST">
                <label for="kode_mk">Kode MK:</label>
                <input type="text" id="kode_mk" name="kode_mk" required>
                
                <label for="nama_mk">Nama MK:</label>
                <input type="text" id="nama_mk" name="nama_mk" required>
                
                <label for="sks">SKS:</label>
                <input type="number" id="sks" name="sks" required>
                
                <label for="prasyarat">Prasyarat:</label>
                <input type="text" id="prasyarat" name="prasyarat" required>
                
                <button type="submit">Simpan</button>
            </form>
        </div>

        <!-- Form Input Data Dosen -->
        <div id="dosen_input" class="form-section">
            <h2>Input Data Dosen</h2>
            <form action="submit_dosen.php" method="POST">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" required>
                
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" id="nama_dosen" name="nama_dosen" required>
                
                <label for="jabatan">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" required>
                
                <button type="submit">Simpan</button>
            </form>
        </div>

        <!-- Form Input Data KRS -->
        <div id="krs_input" class="form-section">
            <h2>Input Data KRS</h2>
            <form action="submit_krs.php" method="POST">
                <label for="npm_krs">NPM:</label>
                <input type="text" id="npm_krs" name="npm" required>
                
                <label for="kode_mk_krs">Kode MK:</label>
                <input type="text" id="kode_mk_krs" name="kode_mk" required>
                
                <label for="tahun_ajaran_krs">Tahun Ajaran:</label>
                <input type="text" id="tahun_ajaran_krs" name="tahun_ajaran" required>
                
                <label for="semester_krs">Semester:</label>
                <input type="text" id="semester_krs" name="semester" required>
                
                <button type="submit">Simpan</button>
            </form>
        </div>

        <!-- Form Input Data KRS Nilai -->
        <div id="krsnil_input" class="form-section">
            <h2>Input Data KRS Nilai</h2>
            <form action="submit_krsnil.php" method="POST">
                <label for="tahun_ajaran_krsnil">Tahun Ajaran:</label>
                <input type="text" id="tahun_ajaran_krsnil" name="tahun_ajaran" required>
                
                <label for="semester_krsnil">Semester:</label>
                <input type="text" id="semester_krsnil" name="semester" required>
                
                <label for="npm_krsnil">NPM:</label>
                <input type="text" id="npm_krsnil" name="npm" required>
                
                <label for="kode_mk_krsnil">Kode MK:</label>
                <input type="text" id="kode_mk_krsnil" name="kode_mk" required>
                
                <label for="nsikap">Nilai Sikap:</label>
                <input type="number" id="nsikap" name="nsikap" required>
                
                <label for="ntugas">Nilai Tugas:</label>
                <input type="number" id="ntugas" name="ntugas" required>
                
                <label for="nuts">Nilai UTS:</label>
                <input type="number" id="nuts" name="nuts" required>
                
                <label for="nuas">Nilai UAS:</label>
                <input type="number" id="nuas" name="nuas" required>
                
                <button type="submit">Simpan</button>
            </form>
        </div>

        <!-- Display Data Mahasiswa -->
        <div id="mahasiswa_display" class="form-section">
            <h2>Data Mahasiswa</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Asal SMA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $result = $conn->query("SELECT * FROM tblmahasiswa");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['npm']}</td>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['alamat']}</td>
                                    <td>{$row['tempat_lahir']}</td>
                                    <td>{$row['tanggal_lahir']}</td>
                                    <td>{$row['asal_sma']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Display Data Mata Kuliah -->
        <div id="matakuliah_display" class="form-section">
            <h2>Data Mata Kuliah</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Kode MK</th>
                        <th>Nama MK</th>
                        <th>SKS</th>
                        <th>Prasyarat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM tblmatakuliah");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['kode_mk']}</td>
                                    <td>{$row['nama_mk']}</td>
                                    <td>{$row['sks']}</td>
                                    <td>{$row['prasyarat']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Tidak ada data tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Display Data KRS Nilai -->
        <div id="krsnil_display" class="form-section">
            <h2>Data KRS Nilai</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Semester</th>
                        <th>NPM</th>
                        <th>Kode MK</th>
                        <th>Nilai Sikap</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM krsnil");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['tahun_ajaran']}</td>
                                    <td>{$row['semester']}</td>
                                    <td>{$row['npm']}</td>
                                    <td>{$row['kode_mk']}</td>
                                    <td>{$row['nsikap']}</td>
                                    <td>{$row['ntugas']}</td>
                                    <td>{$row['nuts']}</td>
                                    <td>{$row['nuas']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>Tidak ada data tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

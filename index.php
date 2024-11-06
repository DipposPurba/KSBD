<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Input Data Akademik</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
            height: 100vh;
            position: fixed;
        }
        .sidebar h2 {
            margin: 0 0 20px;
            font-weight: 700;
            font-size: 24px;
        }
        .sidebar h3 {
            margin: 20px 0 10px;
            font-weight: 700;
        }
        .sidebar a {
            display: block;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #0056b3;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }
        .form-section {
            display: none;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-section.active {
            display: block;
        }
        h2 {
            color: #333;
            font-weight: 700;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }
        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
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
        <a href="#" onclick="showSection('dosen_display')">Data Dosen</a>
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
                <label for="nidn">NIDN:</label>
                <input type="text" id="nidn" name="nidn" required>
                
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" id="nama_dosen" name="nama_dosen" required>
                
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" required>
                
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
            <table>
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
            <table>
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

        <!-- Display Data Dosen-->
        <div id="dosen_display" class="form-section">
            <h2>Data Dosen</h2>
            <table>
                <thead>
                    <tr>
                        <th>NIDN</th>
                        <th>Nama MK</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM dosen");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['NIDN']}</td>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['Alamat']}</td>
                                    <td>{$row['NoHP']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Tidak ada data tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
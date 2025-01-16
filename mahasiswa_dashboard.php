<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
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
        
        <h3>Tampilkan Data</h3>
        <a href="#" onclick="showSection('mahasiswa_display')">Data Mahasiswa</a>
        <a href="#" onclick="showSection('matakuliah_display')">Data Mata Kuliah</a>
        <a href="#" onclick="showSection('krsnil_display')">Data KRS Nilai</a>
        <a href="#" onclick="showSection('dosen_display')">Data Dosen</a>
        <!-- Link untuk logout -->
        <a href="logout.php">Logout</a>
    </div>

    

    <div class="main-content">
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

                    // Tentukan kunci dan metode dekripsi
                    $encryption_key = 'kunci_enkripsi_rahasia'; // Ganti sesuai kunci yang digunakan saat enkripsi
                    $encryption_iv = '1234567891011121'; // Harus sama dengan saat enkripsi
                    $ciphering = "AES-128-CTR";

                    // Ambil data dari database
                    $result = $conn->query("SELECT * FROM tblmahasiswa");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Dekripsi data selain NPM
                            $nama_plain = openssl_decrypt($row['nama'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $alamat_plain = openssl_decrypt($row['alamat'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $tempat_lahir_plain = openssl_decrypt($row['tempat_lahir'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $tanggal_lahir_plain = openssl_decrypt($row['tanggal_lahir'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $asal_sma_plain = openssl_decrypt($row['asal_sma'], $ciphering, $encryption_key, 0, $encryption_iv);

                            // Tampilkan data dengan NPM dalam bentuk asli
                            echo "<tr>
                                    <td>{$row['npm']}</td> <!-- NPM langsung dari database tanpa dekripsi -->
                                    <td>{$nama_plain}</td>
                                    <td>{$alamat_plain}</td>
                                    <td>{$tempat_lahir_plain}</td>
                                    <td>{$tanggal_lahir_plain}</td>
                                    <td>{$asal_sma_plain}</td>
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
                    include 'config.php'; // Sertakan konfigurasi database

                    // Tentukan kunci dan metode enkripsi
                    $encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
                    $encryption_iv = '1234567891011121'; // Harus 16 byte untuk AES-128-CTR
                    $ciphering = "AES-128-CTR";

                    // Ambil data dari database
                    $result = $conn->query("SELECT * FROM tblmatakuliah");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Kolom kode_mk langsung digunakan tanpa dekripsi
                            $kode_mk = $row['kode_mk'];
                            
                            // Dekripsi data untuk kolom lainnya
                            $nama_mk = openssl_decrypt($row['nama_mk'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $sks = openssl_decrypt($row['sks'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $prasyarat = openssl_decrypt($row['prasyarat'], $ciphering, $encryption_key, 0, $encryption_iv);

                            echo "<tr>
                                    <td>{$kode_mk}</td>
                                    <td>{$nama_mk}</td>
                                    <td>{$sks}</td>
                                    <td>{$prasyarat}</td>
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
                    include 'config.php'; // Sertakan konfigurasi database

                    // Tentukan kunci dan metode enkripsi
                    $encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
                    $encryption_iv = '1234567891011121'; // Harus 16 byte untuk AES-128-CTR
                    $ciphering = "AES-128-CTR";

                    // Ambil data dari database
                    $result = $conn->query("SELECT * FROM krsnil");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Dekripsi data kecuali kode_mk
                            $tahun_ajaran = openssl_decrypt($row['tahun_ajaran'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $semester = openssl_decrypt($row['semester'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $npm = $row['npm']; // Tidak didekripsi
                            $kode_mk = $row['kode_mk']; // Tidak didekripsi
                            $nsikap = openssl_decrypt($row['nsikap'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $ntugas = openssl_decrypt($row['ntugas'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $nuts = openssl_decrypt($row['nuts'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $nuas = openssl_decrypt($row['nuas'], $ciphering, $encryption_key, 0, $encryption_iv);

                            echo "<tr>
                                    <td>{$tahun_ajaran}</td>
                                    <td>{$semester}</td>
                                    <td>{$npm}</td>
                                    <td>{$kode_mk}</td>
                                    <td>{$nsikap}</td>
                                    <td>{$ntugas}</td>
                                    <td>{$nuts}</td>
                                    <td>{$nuas}</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>Tidak ada data tersedia.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>



                <!-- Display Data Dosen -->
        <div id="dosen_display" class="form-section">
            <h2>Data Dosen</h2>
            <table>
                <thead>
                    <tr>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php'; // Sertakan konfigurasi database

                    // Tentukan kunci dan metode enkripsi
                    $encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
                    $encryption_iv = '1234567891011121'; // Harus 16 byte untuk AES-128-CTR
                    $ciphering = "AES-128-CTR";

                    // Ambil data dari database
                    $result = $conn->query("SELECT * FROM dosen");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Kolom NIDN tidak didekripsi karena plaintext
                            $NIDN = $row['NIDN']; 
                            $NAMA = openssl_decrypt($row['Nama'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $ALAMAT = openssl_decrypt($row['Alamat'], $ciphering, $encryption_key, 0, $encryption_iv);
                            $NOHP = openssl_decrypt($row['noHP'], $ciphering, $encryption_key, 0, $encryption_iv);

                            echo "<tr>
                                    <td>{$NIDN}</td>
                                    <td>{$NAMA}</td>
                                    <td>{$ALAMAT}</td>
                                    <td>{$NOHP}</td>
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
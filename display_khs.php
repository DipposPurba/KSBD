<?php
include 'config.php'; // Sertakan konfigurasi database

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk AES-128-CTR
$ciphering = "AES-128-CTR";

// Cek apakah tombol pencarian ditekan
if (isset($_POST['search_khs'])) {
    // Ambil NPM yang diinputkan
    $npm = $_POST['npm'];

    // Query untuk mendapatkan data KHS dan Nama Mahasiswa
    $query = "
        SELECT 
            m.nama AS nama_mahasiswa,
            k.tahun_ajaran,
            k.semester,
            k.kode_mk,
            k.nsikap,
            k.ntugas,
            k.nuts,
            k.nuas
        FROM krsnil k
        JOIN tblmahasiswa m ON k.npm = m.npm
        WHERE k.npm = '$npm'
    ";
    $result = $conn->query($query);

    // Tampilkan nama mahasiswa dan NPM
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Ambil baris pertama untuk nama
        $nama_mahasiswa = openssl_decrypt($row['nama_mahasiswa'], $ciphering, $encryption_key, 0, $encryption_iv);

        echo "<h2>KHS Mahasiswa</h2>";
        echo "<p><strong>NPM:</strong> $npm</p>";
        echo "<p><strong>Nama:</strong> $nama_mahasiswa</p>";

        // Tampilkan data KHS
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Semester</th>
                        <th>Kode MK</th>
                        <th>Nilai Sikap</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>";

        // Ulangi proses dekripsi untuk baris lainnya
        do {
            $tahun_ajaran = openssl_decrypt($row['tahun_ajaran'], $ciphering, $encryption_key, 0, $encryption_iv);
            $semester = openssl_decrypt($row['semester'], $ciphering, $encryption_key, 0, $encryption_iv);
            $kode_mk = $row['kode_mk'];
            $nsikap = openssl_decrypt($row['nsikap'], $ciphering, $encryption_key, 0, $encryption_iv);
            $ntugas = openssl_decrypt($row['ntugas'], $ciphering, $encryption_key, 0, $encryption_iv);
            $nuts = openssl_decrypt($row['nuts'], $ciphering, $encryption_key, 0, $encryption_iv);
            $nuas = openssl_decrypt($row['nuas'], $ciphering, $encryption_key, 0, $encryption_iv);

            // Hitung Nilai Akhir
            $nilai_akhir = ($nsikap * 0.1) + ($ntugas * 0.2) + ($nuts * 0.3) + ($nuas * 0.4);

            echo "<tr>
                    <td>{$tahun_ajaran}</td>
                    <td>{$semester}</td>
                    <td>{$kode_mk}</td>
                    <td>{$nsikap}</td>
                    <td>{$ntugas}</td>
                    <td>{$nuts}</td>
                    <td>{$nuas}</td>
                    <td>{$nilai_akhir}</td>
                </tr>";
        } while ($row = $result->fetch_assoc());

        echo "</tbody></table>";
    } else {
        echo "<p>Tidak ada data KHS untuk NPM: $npm.</p>";
    }
}

// Tutup koneksi
$conn->close();
?>

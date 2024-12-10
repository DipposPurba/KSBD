<?php
include 'config.php'; // Sertakan file konfigurasi

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk AES-128-CTR
$ciphering = "AES-128-CTR";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $npm = $_POST['npm'];
    $kode_mk = $_POST['kode_mk'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $semester = $_POST['semester'];

    // Encrypt data sebelum disimpan
    $npm_encrypted = openssl_encrypt($npm, $ciphering, $encryption_key, 0, $encryption_iv);
    $kode_mk_encrypted = openssl_encrypt($kode_mk, $ciphering, $encryption_key, 0, $encryption_iv);
    $tahun_ajaran_encrypted = openssl_encrypt($tahun_ajaran, $ciphering, $encryption_key, 0, $encryption_iv);
    $semester_encrypted = openssl_encrypt($semester, $ciphering, $encryption_key, 0, $encryption_iv);

    // Validasi data jika diperlukan (opsional)
    if (!empty($npm) && !empty($kode_mk) && !empty($tahun_ajaran) && !empty($semester)) {
        // Query untuk menyimpan data terenkripsi ke tabel KRS
        $query = "INSERT INTO krs (npm, kode_mk, tahun_ajaran, semester) 
                  VALUES ('$npm_encrypted', '$kode_mk_encrypted', '$tahun_ajaran_encrypted', '$semester_encrypted')";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "Data KRS berhasil disimpan.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Semua data harus diisi!";
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>

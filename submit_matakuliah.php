<?php
include 'config.php'; // Sertakan file konfigurasi

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk metode AES-128-CTR
$ciphering = "AES-128-CTR";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari input form
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $prasyarat = $_POST['prasyarat'];

    // Encrypt data sebelum disimpan
    $kode_mk_encrypted = openssl_encrypt($kode_mk, $ciphering, $encryption_key, 0, $encryption_iv);
    $nama_mk_encrypted = openssl_encrypt($nama_mk, $ciphering, $encryption_key, 0, $encryption_iv);
    $sks_encrypted = openssl_encrypt($sks, $ciphering, $encryption_key, 0, $encryption_iv);
    $prasyarat_encrypted = openssl_encrypt($prasyarat, $ciphering, $encryption_key, 0, $encryption_iv);

    // Query untuk menyimpan data terenkripsi ke database
    $sql = "INSERT INTO tblmatakuliah (kode_mk, nama_mk, sks, prasyarat) VALUES ('$kode_mk_encrypted', '$nama_mk_encrypted', '$sks_encrypted', '$prasyarat_encrypted')";

    if ($conn->query($sql) === TRUE) {
        echo "Data mata kuliah berhasil disimpan dengan enkripsi.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

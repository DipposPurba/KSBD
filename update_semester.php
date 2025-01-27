<?php
include 'config.php'; // Sertakan konfigurasi database

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk AES-128-CTR
$ciphering = "AES-128-CTR";

if (isset($_POST['update_semester'])) {
    // Ambil input semester baru
    $semester_baru = $_POST['semester_baru'];
    
    // Enkripsi semester baru
    $semester_baru_encrypted = openssl_encrypt($semester_baru, $ciphering, $encryption_key, 0, $encryption_iv);
    
    // Update semua field semester di tabel krsnil
    $query = "UPDATE krsnil SET semester = '$semester_baru_encrypted'";
    
    if ($conn->query($query) === TRUE) {
        echo "Semua field semester berhasil diupdate ke $semester_baru.";
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Tutup koneksi
    $conn->close();
}
?>

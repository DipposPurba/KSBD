<?php
include 'config.php'; // Sertakan file konfigurasi

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk metode AES-128-CTR
$ciphering = "AES-128-CTR";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari input form
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $asal_sma = $_POST['asal_sma'];

    // Encrypt data sebelum disimpan
    $npm_encrypted = openssl_encrypt($npm, $ciphering, $encryption_key, 0, $encryption_iv);
    $nama_encrypted = openssl_encrypt($nama, $ciphering, $encryption_key, 0, $encryption_iv);
    $alamat_encrypted = openssl_encrypt($alamat, $ciphering, $encryption_key, 0, $encryption_iv);
    $tempat_lahir_encrypted = openssl_encrypt($tempat_lahir, $ciphering, $encryption_key, 0, $encryption_iv);
    $tanggal_lahir_encrypted = openssl_encrypt($tanggal_lahir, $ciphering, $encryption_key, 0, $encryption_iv);
    $asal_sma_encrypted = openssl_encrypt($asal_sma, $ciphering, $encryption_key, 0, $encryption_iv);

    // Query untuk menyimpan data terenkripsi ke database
    $sql = "INSERT INTO tblmahasiswa (npm, nama, alamat, tempat_lahir, tanggal_lahir, asal_sma) VALUES ('$npm_encrypted', '$nama_encrypted', '$alamat_encrypted', '$tempat_lahir_encrypted', '$tanggal_lahir_encrypted', '$asal_sma_encrypted')";

    if ($conn->query($sql) === TRUE) {
        echo "Data mahasiswa berhasil disimpan dengan enkripsi.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

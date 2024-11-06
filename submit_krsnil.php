<?php
include 'config.php'; // Sertakan file konfigurasi

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk metode AES-128-CTR
$ciphering = "AES-128-CTR";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari input form
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $semester = $_POST['semester'];
    $npm = $_POST['npm'];
    $kode_mk = $_POST['kode_mk'];
    $nsikap = $_POST['nsikap'];
    $ntugas = $_POST['ntugas'];
    $nuts = $_POST['nuts'];
    $nuas = $_POST['nuas'];

    // Encrypt data sebelum disimpan
    $tahun_ajaran_encrypted = openssl_encrypt($tahun_ajaran, $ciphering, $encryption_key, 0, $encryption_iv);
    $semester_encrypted = openssl_encrypt($semester, $ciphering, $encryption_key, 0, $encryption_iv);
    $npm_encrypted = openssl_encrypt($npm, $ciphering, $encryption_key, 0, $encryption_iv);
    $kode_mk_encrypted = openssl_encrypt($kode_mk, $ciphering, $encryption_key, 0, $encryption_iv);
    $nsikap_encrypted = openssl_encrypt($nsikap, $ciphering, $encryption_key, 0, $encryption_iv);
    $ntugas_encrypted = openssl_encrypt($ntugas, $ciphering, $encryption_key, 0, $encryption_iv);
    $nuts_encrypted = openssl_encrypt($nuts, $ciphering, $encryption_key, 0, $encryption_iv);
    $nuas_encrypted = openssl_encrypt($nuas, $ciphering, $encryption_key, 0, $encryption_iv);

    // Query untuk menyimpan data terenkripsi ke database
    $sql = "INSERT INTO tblkrsnil (tahun_ajaran, semester, npm, kode_mk, nsikap, ntugas, nuts, nuas) VALUES ('$tahun_ajaran_encrypted', '$semester_encrypted', '$npm_encrypted', '$kode_mk_encrypted', '$nsikap_encrypted', '$ntugas_encrypted', '$nuts_encrypted', '$nuas_encrypted')";

    if ($conn->query($sql) === TRUE) {
        echo "Data nilai KRS berhasil disimpan dengan enkripsi.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

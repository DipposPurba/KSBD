<?php
// config.php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; // Ganti dengan password MySQL Anda
$DB_NAME = 'kuliah';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>

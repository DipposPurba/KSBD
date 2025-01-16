<?php
// submit_dosen.php
include 'config.php'; // Sertakan file konfigurasi

// Tentukan kunci dan metode enkripsi
$encryption_key = 'kunci_enkripsi_rahasia'; // Ganti dengan kunci yang aman
$encryption_iv = '1234567891011121'; // Harus 16 byte untuk metode AES-128-CTR
$ciphering = "AES-128-CTR";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari input form
    $NIDN = $_POST['NIDN']; // Tidak dienkripsi
    $NAMA = $_POST['Nama'];
    $ALAMAT = $_POST['Alamat'];
    $NOHP = $_POST['NoHP'];

    // Encrypt data sebelum disimpan (kecuali NIDN)
    $NAMA_encrypted = openssl_encrypt($NAMA, $ciphering, $encryption_key, 0, $encryption_iv);
    $ALAMAT_encrypted = openssl_encrypt($ALAMAT, $ciphering, $encryption_key, 0, $encryption_iv);
    $NOHP_encrypted = openssl_encrypt($NOHP, $ciphering, $encryption_key, 0, $encryption_iv);

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO dosen (NIDN, Nama, Alamat, NoHP) VALUES ('$NIDN', '$NAMA_encrypted', '$ALAMAT_encrypted', '$NOHP_encrypted')";

    if ($conn->query($sql) === TRUE) {
        echo "Data dosen berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

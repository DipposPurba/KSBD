<?php
include 'config.php';

$encryption_key = 'your-secret-key'; // Ganti dengan kunci rahasia Anda
$cipher_method = 'AES-128-CBC';
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));

// Nonaktifkan foreign key checks sementara
$conn->query("SET FOREIGN_KEY_CHECKS=0");

// Fungsi untuk mengenkripsi data
function encrypt_data($data, $encryption_key, $cipher_method, $iv) {
    return openssl_encrypt($data, $cipher_method, $encryption_key, 0, $iv);
}

// Daftar tabel yang akan dienkripsi
$tables = [
    'tblmahasiswa' => ['npm', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'asal_sma'],
    'tblmatakuliah' => ['kode_mk', 'nama_mk', 'sks', 'prasyarat'],
    'dosen' => ['nidn', 'nama', 'alamat', 'no_hp'],
    'krsnil' => ['tahun_ajaran', 'semester', 'npm', 'kode_mk', 'nsikap', 'ntugas', 'nuts', 'nuas']
];

foreach ($tables as $table => $columns) {
    $result = $conn->query("SELECT * FROM $table");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $encrypted_data = [];
            foreach ($columns as $column) {
                $encrypted_data[$column] = encrypt_data($row[$column], $encryption_key, $cipher_method, $iv);
            }

            $set_clause = implode(', ', array_map(
                fn($k, $v) => "$k='$v'",
                array_keys($encrypted_data),
                array_values($encrypted_data)
            ));

            $primary_key_column = array_keys($row)[0]; // Asumsi kolom pertama sebagai primary key
            $primary_key_value = $row[$primary_key_column];
            
            $query = "UPDATE $table SET $set_clause WHERE $primary_key_column = '$primary_key_value'";
            $conn->query($query);
        }
    }
}

// Aktifkan kembali foreign key checks
$conn->query("SET FOREIGN_KEY_CHECKS=1");

echo "Semua data berhasil dienkripsi.";
$conn->close();
?>

<?php
// Include konfigurasi database
include 'config.php';

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $npm = $_POST['npm'];
    $kode_mk = $_POST['kode_mk'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $semester = $_POST['semester'];

    // Validasi data jika diperlukan (opsional)
    if (!empty($npm) && !empty($kode_mk) && !empty($tahun_ajaran) && !empty($semester)) {
        // Query untuk menyimpan data ke tabel KRS
        $query = "INSERT INTO krs (npm, kode_mk, tahun_ajaran, semester) 
                  VALUES ('$npm', '$kode_mk', '$tahun_ajaran', '$semester')";

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

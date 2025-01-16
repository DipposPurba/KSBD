<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php'; // Pastikan Anda sudah mengkonfigurasi koneksi DB di sini

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Ambil role yang dipilih

    // Validasi agar role hanya bisa 'mahasiswa' atau 'dosen'
    if ($role !== 'mahasiswa' && $role !== 'dosen') {
        $error = "Role tidak valid!";
    } else {
        // Enkripsi password sebelum disimpan
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Gunakan prepared statements untuk keamanan
        $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password_hash, $role);
        if ($stmt->execute()) {
            $success = "Pendaftaran berhasil! Silakan login.";
        } else {
            $error = "Terjadi kesalahan saat mendaftar.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .register-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .register-container p {
            color: red;
        }
        .register-container label {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }
        .register-container input, .register-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .register-container button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        .register-container button:hover {
            background-color: #45a049;
        }
        .register-container a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Daftar</h2>

        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        <?php if (isset($success)) { echo "<p style='color: green;'>$success</p>"; } ?>

        <form action="daftar.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="role">Role:</label>
            <select name="role" required>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="dosen">Dosen</option>
            </select>

            <button type="submit">Daftar</button>
        </form>

        <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
    </div>

</body>
</html>

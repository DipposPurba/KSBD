<?php
session_start();

// Cek jika pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Jika sudah login, alihkan ke halaman dashboard
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php'; // Pastikan Anda sudah mengkonfigurasi koneksi DB di sini

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gunakan prepared statements untuk keamanan
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username); // Menyusun parameter untuk query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password yang dienkripsi
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role']; // Menyimpan role (Dosen atau Mahasiswa)

            // Mengarahkan ke halaman dashboard berdasarkan role
            if ($user['role'] == 'mahasiswa') {
                header("Location: mahasiswa_dashboard.php"); // Halaman dashboard mahasiswa
            } elseif ($user['role'] == 'dosen') {
                header("Location: dosen_dashboard.php"); // Halaman dashboard dosen
            }
            exit();
        } else {
            $error = "Username atau password salah!"; // Pesan kesalahan jika login gagal
        }
    } else {
        $error = "Username atau password salah!"; // Pesan kesalahan jika login gagal
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container p {
            color: red;
        }
        .login-container label {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login-container button {
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
        .login-container button:hover {
            background-color: #45a049;
        }
        .login-container a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>

        <form action="index.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>

        <p>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>
    </div>

</body>
</html>

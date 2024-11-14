<?php
session_start();
session_destroy();  // Menghancurkan semua session
header("Location: login.php");  // Redirect ke halaman login
exit;
?>

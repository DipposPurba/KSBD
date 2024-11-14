<?php
session_start();
session_destroy();  // Menghancurkan semua session
header("Location: index.php");  // Redirect ke halaman login
exit;
?>

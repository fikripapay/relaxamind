<?php
// Mulai sesi atau lanjutkan sesi yang sudah ada
session_start();

// Menghapus semua data session
session_unset();

// Menghancurkan session
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit;
?>

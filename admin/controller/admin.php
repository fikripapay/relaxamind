<?php
// Memuat file model admin.php yang berisi definisi kelas Admin_Model
require_once 'model/admin.php';

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat instance dari kelas Admin_Model
    $controller = new Admin_Model();

    // Memeriksa apakah parameter 'update' ada di dalam POST
    if (isset($_POST['update'])) {
        // Mengambil nilai 'username' dari POST
        $username = $_POST['username'];
        // Mengambil nilai 'password' dari POST
        $password = $_POST['password'];

        // Memanggil metode updateAdmin dengan parameter username, password, dan conn
        if ($controller->updateAdmin($username, $password, $conn)) {
            // Jika update berhasil, mengarahkan ke halaman admin dengan parameter update
            header("Location: index.php?page=admin&update");
            exit();
        } else {
            // Jika update gagal, menampilkan pesan kesalahan menggunakan JavaScript alert
            echo "<script>alert('Gagal mengganti password.');</script>";
        }
    }
}

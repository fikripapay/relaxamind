<?php
// Memuat file model sambutan.php yang berisi definisi kelas Sambutan_Model
require_once 'model/sambutan.php';

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat instance dari kelas Sambutan_Model
    $controller = new Sambutan_Model();

    // Memeriksa apakah parameter 'update' ada di dalam POST
    if (isset($_POST['update'])) {
        // Mengambil nilai 'id_sambutan' dari POST
        $id_sambutan = $_POST['id_sambutan'];
        // Mengambil nilai 'nama_kepsek' dari POST
        $nama_kepsek = $_POST['nama_kepsek'];
        // Mengambil nilai 'sambutan' dari POST
        $sambutan = $_POST['sambutan'];

        // Mengambil informasi file yang diunggah
        $nama_file = $_FILES['foto_kepsek']['name'];
        $lokasi_file = $_FILES['foto_kepsek']['tmp_name'];
        $tujuan_file = "../assets/img/sambutan/$nama_kepsek.png";

        // Memindahkan file yang diunggah ke lokasi tujuan
        if (move_uploaded_file($lokasi_file, $tujuan_file)) {
            // Memanggil metode updateSambutan untuk memperbarui data sambutan di database
            if ($controller->updateSambutan($tujuan_file, $nama_kepsek, $sambutan, $id_sambutan, $conn)) {
                // Jika update berhasil, mengarahkan ke halaman sambutan dengan parameter update
                header("Location: index.php?page=sambutan&update");
                exit();
            }
        } else {
            // Jika gagal mengunggah file, tampilkan pesan kesalahan
            echo "<script>alert('Gagal mengunggah file.');</script>";
        }
    }
}

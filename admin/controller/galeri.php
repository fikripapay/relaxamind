<?php
// Memuat file model galeri.php yang berisi definisi kelas Galeri_Model
require_once 'model/galeri.php';

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat instance dari kelas Galeri_Model
    $controller = new Galeri_Model();

    // Memanggil fungsi tambah galeri jika tombol tambah ditekan
    if (isset($_POST['tambah'])) {
        // Mengambil nilai 'deskripsi' dari POST
        $deskripsi = $_POST['deskripsi'];

        // Lakukan query ke database untuk memeriksa apakah nama galeri sudah ada
        $query_cek = "SELECT COUNT(*) AS jumlah FROM tb_galeri WHERE deskripsi = '$deskripsi'";
        $result_cek = mysqli_query($conn, $query_cek);
        $row_cek = mysqli_fetch_assoc($result_cek);
        $jumlah_galeri = $row_cek['jumlah'];

        // Jika jumlah galeri dengan nama yang sama lebih dari 0, berikan pesan kesalahan
        if ($jumlah_galeri > 0) {
            echo "<script>alert('Nama galeri sudah ada di database. Mohon pilih nama lain.');</script>";
        } else {
            // Mendapatkan informasi file galeri yang diunggah
            $nama_galeri = $_FILES['galeri']['name'];
            $lokasi_galeri = $_FILES['galeri']['tmp_name'];
            $path = "../assets/img/galeri/$deskripsi.png";

            // Memindahkan file galeri ke lokasi tujuan
            if (move_uploaded_file($lokasi_galeri, $path)) {
                // Memanggil metode tambahGaleri untuk menambahkan galeri baru ke database
                if ($controller->tambahGaleri($path, $deskripsi, $conn)) {
                    // Jika tambah berhasil, mengarahkan ke halaman galeri dengan parameter insert
                    header("Location: index.php?page=galeri&insert");
                    exit();
                }
            } else {
                // Jika gagal mengunggah file, tampilkan pesan kesalahan
                echo "<script>alert('Gagal');</script>";
            }
        }
    }
}

// Memeriksa apakah request yang diterima adalah GET dan parameter 'hapus' ada
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
    // Membuat instance dari kelas Galeri_Model
    $controller = new Galeri_Model();

    // Mendapatkan id dan nama file galeri yang akan dihapus
    $id = $_GET['hapus'];
    $namafile = $_GET['nama'];

    // Memanggil fungsi hapus galeri
    if ($controller->hapusGaleri($id, $namafile, $conn)) {
        // Jika hapus berhasil, mengarahkan ke halaman galeri dengan parameter delete
        header("Location: index.php?page=galeri&delete");
        exit();
    } else {
        // Jika gagal menghapus, tampilkan pesan kesalahan
        echo "<script>alert('Gagal menghapus karena data masih dibutuhkan');</script>";
    }
}
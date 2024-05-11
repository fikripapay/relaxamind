<?php
require_once 'model/berita.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new Berita_Model();

    // Memanggil fungsi tambah berita jika tombol tambah di tekan
    if (isset($_POST['tambah'])) {
        $judul = $_POST['judul'];
        $berita = $_POST['berita'];

        // Lakukan query ke database untuk memeriksa apakah nama berita sudah ada
        $query_cek = "SELECT COUNT(*) AS jumlah FROM tb_berita WHERE judul = '$judul'";
        $result_cek = mysqli_query($conn, $query_cek);
        $row_cek = mysqli_fetch_assoc($result_cek);
        $jumlah_berita = $row_cek['jumlah'];

        // Jika jumlah berita dengan nama yang sama lebih dari 0, berikan pesan kesalahan
        if ($jumlah_berita > 0) {
            echo "<script>alert('Judul berita sudah ada di database. Mohon pilih judul lain.');</script>";
        } else {
            $thumbnail = $_FILES['thumbnail']['name'];
            $lokasi_thumbnail = $_FILES['thumbnail']['tmp_name'];
            $path = "../assets/img/berita/$judul.png";
            if (move_uploaded_file($lokasi_thumbnail, $path)) {
                if ($controller->tambahBerita($path, $judul, $berita, $conn)) {
                    header("Location: index.php?page=berita&insert");
                    exit();
                }
            } else {
                echo "<script>alert('Gagal');</script>";
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
    $controller = new Berita_Model();

    // Mendapatkan id_berita yang akan dihapus
    $id_berita = $_GET['hapus'];
    $nama_berita = $_GET['nama'];

    // Memanggil fungsi hapus berita
    if ($controller->hapusBerita($id_berita, $nama_berita, $conn)) {
        header("Location: index.php?page=berita&delete");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus karena data masih dibutuhkan');</script>";
    }
}
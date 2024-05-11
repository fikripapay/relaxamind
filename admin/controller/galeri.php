<?php
require_once 'model/galeri.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new Galeri_Model();

    // Memanggil fungsi tambah galeri jika tombol tambah di tekan
    if (isset($_POST['tambah'])) {
        $deskripsi = $_POST['deskripsi'];
        $link = $_POST['link'];

        // Lakukan query ke database untuk memeriksa apakah nama galeri sudah ada
        $query_cek = "SELECT COUNT(*) AS jumlah FROM tb_galeri WHERE deskripsi = '$deskripsi'";
        $result_cek = mysqli_query($conn, $query_cek);
        $row_cek = mysqli_fetch_assoc($result_cek);
        $jumlah_galeri = $row_cek['jumlah'];

        // Jika jumlah galeri dengan nama yang sama lebih dari 0, berikan pesan kesalahan
        if ($jumlah_galeri > 0) {
            echo "<script>alert('Nama galeri sudah ada di database. Mohon pilih nama lain.');</script>";
        } else {
            $nama_galeri = $_FILES['galeri']['name'];
            $lokasi_galeri = $_FILES['galeri']['tmp_name'];
            $path = "../assets/img/galeri/$deskripsi.png";
            if (move_uploaded_file($lokasi_galeri, $path)) {
                if ($controller->tambahGaleri($path, $link, $deskripsi, $conn)) {
                    header("Location: index.php?page=galeri&insert");
                    exit();
                }
            } else {
                echo "<script>alert('Gagal');</script>";
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
    $controller = new Galeri_Model();

    // Mendapatkan id_galeri yang akan dihapus
    $id_galeri = $_GET['hapus'];
    $nama_galeri = $_GET['nama'];

    // Memanggil fungsi hapus galeri
    if ($controller->hapusGaleri($id_galeri, $nama_galeri, $conn)) {
        header("Location: index.php?page=galeri&delete");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus karena data masih dibutuhkan');</script>";
    }
}
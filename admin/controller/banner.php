<?php
// Memuat file model banner.php yang berisi definisi kelas Banner_Model
require_once 'model/banner.php';

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat instance dari kelas Banner_Model
    $controller = new Banner_Model();

    // Memanggil fungsi tambah banner jika tombol tambah ditekan
    if (isset($_POST['tambah'])) {
        // Mengambil nilai 'nama' dari POST
        $nama = $_POST['nama'];

        // Lakukan query ke database untuk memeriksa apakah nama banner sudah ada
        $query_cek = "SELECT COUNT(*) AS jumlah FROM tbl_banner WHERE nama = '$nama'";
        $result_cek = mysqli_query($conn, $query_cek);
        $row_cek = mysqli_fetch_assoc($result_cek);
        $jumlah_banner = $row_cek['jumlah'];

        // Jika jumlah banner dengan nama yang sama lebih dari 0, berikan pesan kesalahan
        if ($jumlah_banner > 0) {
            echo "<script>alert('Nama banner sudah ada di database. Mohon pilih nama lain.');</script>";
        } else {
            // Mendapatkan informasi file banner yang diunggah
            $nama_banner = $_FILES['banner']['name'];
            $lokasi_banner = $_FILES['banner']['tmp_name'];
            $tujuan_banner = "../assets/img/hero/$nama.png";

            // Memindahkan file banner ke lokasi tujuan
            if (move_uploaded_file($lokasi_banner, $tujuan_banner)) {
                // Memanggil metode tambahBanner untuk menambahkan banner baru ke database
                if ($controller->tambahBanner($nama, $tujuan_banner, $conn)) {
                    header("Location: index.php?page=banner&insert");
                    exit();
                }
            } else {
                echo "<script>alert('Gagal');</script>";
            }
        }
    }
}

// Memeriksa apakah request yang diterima adalah GET dan parameter 'hapus' ada
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
    // Membuat instance dari kelas Banner_Model
    $controller = new Banner_Model();

    // Mendapatkan id_banner dan nama_banner yang akan dihapus
    $id_banner = $_GET['hapus'];
    $nama_banner = $_GET['nama'];

    // Memanggil fungsi hapus banner
    if ($controller->hapusBanner($id_banner, $nama_banner, $conn)) {
        header("Location: index.php?page=banner&delete");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus karena data masih dibutuhkan');</script>";
    }
}
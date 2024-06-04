<?php
// Memuat file model berita.php yang berisi definisi kelas Berita_Model
require_once 'model/berita.php';

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat instance dari kelas Berita_Model
    $controller = new Berita_Model();

    // Memanggil fungsi tambah berita jika tombol tambah ditekan
    if (isset($_POST['tambah'])) {
        // Mengambil nilai 'judul' dari POST
        $judul = $_POST['judul'];
        // Mengambil nilai 'berita' dari POST
        $berita = $_POST['berita'];

        // Lakukan query ke database untuk memeriksa apakah judul berita sudah ada
        $query_cek = "SELECT COUNT(*) AS jumlah FROM tb_berita WHERE judul = '$judul'";
        $result_cek = mysqli_query($conn, $query_cek);
        $row_cek = mysqli_fetch_assoc($result_cek);
        $jumlah_berita = $row_cek['jumlah'];

        // Jika jumlah berita dengan judul yang sama lebih dari 0, berikan pesan kesalahan
        if ($jumlah_berita > 0) {
            echo "<script>alert('Judul berita sudah ada di database. Mohon pilih judul lain.');</script>";
        } else {
            // Masukkan data berita ke database dengan nilai sementara untuk thumbnail
            $query_insert = "INSERT INTO tb_berita (judul, berita, thumbnail) VALUES ('$judul', '$berita', '')";
            if (mysqli_query($conn, $query_insert)) {
                // Dapatkan ID terakhir yang dimasukkan
                $id_berita = mysqli_insert_id($conn);
                
                // Mengambil informasi file thumbnail yang diunggah
                $thumbnail = $_FILES['thumbnail']['name'];
                $lokasi_thumbnail = $_FILES['thumbnail']['tmp_name'];
                $path = "../assets/img/berita/$id_berita.png";

                // Memindahkan file thumbnail ke lokasi tujuan
                if (move_uploaded_file($lokasi_thumbnail, $path)) {
                    // Perbarui path thumbnail di database
                    $query_update = "UPDATE tb_berita SET thumbnail='$path' WHERE id='$id_berita'";
                    if (mysqli_query($conn, $query_update)) {
                        // Jika update berhasil, mengarahkan ke halaman berita dengan parameter insert
                        header("Location: index.php?page=berita&insert");
                        exit();
                    }
                } else {
                    // Jika gagal mengunggah file, tampilkan pesan kesalahan
                    echo "<script>alert('Gagal mengunggah file thumbnail');</script>";
                }
            } else {
                // Jika gagal menambah berita, tampilkan pesan kesalahan
                echo "<script>alert('Gagal menambah berita');</script>";
            }
        }
    }
}

// Memeriksa apakah request yang diterima adalah GET dan parameter 'hapus' ada
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
    // Membuat instance dari kelas Berita_Model
    $controller = new Berita_Model();

    // Mendapatkan id_berita yang akan dihapus
    $id_berita = $_GET['hapus'];

    // Memanggil fungsi hapus berita
    if ($controller->hapusBerita($id_berita, $conn)) {
        // Jika hapus berhasil, mengarahkan ke halaman berita dengan parameter delete
        header("Location: index.php?page=berita&delete");
        exit();
    } else {
        // Jika gagal menghapus, tampilkan pesan kesalahan
        echo "<script>alert('Gagal menghapus');</script>";
    }
}

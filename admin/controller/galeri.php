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
            // Masukkan data berita ke database dengan nilai sementara
            $query_insert = "INSERT INTO tb_galeri (path, deskripsi) VALUES ('', '$deskripsi')";
            if (mysqli_query($conn, $query_insert)) {

                // Dapatkan ID terakhir yang dimasukkan
                $id_galeri = mysqli_insert_id($conn);
                
                // Mendapatkan informasi file galeri yang diunggah
                $nama_galeri = $_FILES['galeri']['name'];
                $lokasi_galeri = $_FILES['galeri']['tmp_name'];
                $path = "../assets/img/galeri/$id_galeri.png";

                // Memindahkan file galeri ke lokasi tujuan
                if (move_uploaded_file($lokasi_galeri, $path)) {
                    // Perbarui path thumbnail di database
                    $query_update = "UPDATE tb_galeri SET path='$path' WHERE id='$id_galeri'";
                    if (mysqli_query($conn, $query_update)) {
                        // Jika update berhasil, mengarahkan ke halaman berita dengan parameter insert
                        header("Location: index.php?page=galeri&insert");
                        exit();
                    }
                } else {
                    // Jika gagal mengunggah file, tampilkan pesan kesalahan
                    echo "<script>alert('Gagal mengunggah');</script>";
                }
            } else {
                 // Jika gagal menambah galeri, tampilkan pesan kesalahan
                 echo "<script>alert('Gagal menambah foto');</script>";
            }

        }
    }
}

// Memeriksa apakah request yang diterima adalah GET dan parameter 'hapus' ada
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
    // Membuat instance dari kelas Galeri_Model
    $controller = new Galeri_Model();

    // Mendapatkan id galeri yang akan dihapus
    $id_galeri = $_GET['hapus'];

    // Memanggil fungsi hapus galeri
    if ($controller->hapusGaleri($id_galeri, $conn)) {
        // Jika hapus berhasil, mengarahkan ke halaman galeri dengan parameter delete
        header("Location: index.php?page=galeri&delete");
        exit();
    } else {
        // Jika gagal menghapus, tampilkan pesan kesalahan
        echo "<script>alert('Gagal menghapus');</script>";
    }
}
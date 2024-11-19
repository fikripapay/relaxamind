<?php
// Memuat file model dataps.php yang berisi definisi kelas Dataps_Model
require_once 'model/dataps.php';
require_once 'config/database.php';

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Membuat instance dari kelas Galeri_Model
  $controller = new Dataps_Model();

  // Memanggil fungsi tambah Dataps jika tombol tambah ditekan
  if (isset($_POST['tambah'])) {
      $nama = $_POST['nama'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $pendidikan = $_POST['pendidikan'];
      $jabatan = $_POST['jabatan'];
      $deskripsi = $_POST['deskripsi'];

      if ($controller->tambahDataps($nama, $jenis_kelamin, $pendidikan, $jabatan, $deskripsi, $conn)) {
        header("Location: index.php?page=dataps&insert");
        exit();
      } else {
        // Jika gagal mengunggah file, tampilkan pesan kesalahan
        echo "<script>alert('Gagal');</script>";
      }
    }
}

// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Membuat instance dari kelas Dataps_Model
  $controller = new Dataps_Model();

  // Memeriksa apakah parameter 'update' ada di dalam POST
  if (isset($_POST['update'])) {
      $id_dataps = $_POST['id_dataps'];
      $nama = $_POST['nama'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $pendidikan = $_POST['pendidikan'];
      $jabatan = $_POST['jabatan'];
      $deskripsi = $_POST['deskripsi'];

      if ($controller->updateDataps($nama, $jenis_kelamin, $pendidikan, $jabatan, $deskripsi, $id_dataps, $conn)) {
          header("Location: index.php?page=dataps&update");
          exit();
      } else {
          echo "<script>alert('Gagal mengubah data.');</script>";
      }
  }
}

// Memeriksa apakah request yang diterima adalah GET dan parameter 'hapus' ada
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hapus'])) {
  // Membuat instance dari kelas Banner_Model
  $controller = new Dataps_Model();

  // Mendapatkan id_banner dan nama_banner yang akan dihapus
  $id_dataps = $_GET['hapus'];

  // Memanggil fungsi hapus banner
  if ($controller->hapusDataps($id_dataps, $conn)) {
      header("Location: index.php?page=dataps&delete");
      exit();
  } else {
      echo "<script>alert('Gagal menghapus karena data masih dibutuhkan');</script>";
  }
}
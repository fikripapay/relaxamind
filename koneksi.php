<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "relaxamind";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Mengecek apakah koneksi berhasil atau tidak
if ($conn->connect_error) {
  // Jika koneksi gagal, tampilkan pesan error
  die("Koneksi gagal: " . $conn->connect_error);
}
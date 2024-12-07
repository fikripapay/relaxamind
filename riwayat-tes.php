<?php
session_start();
include "admin/config/database.php";

// Cek apakah pengguna sudah login dengan memeriksa session username
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: masuk.php");
    exit();
}

$id_users = $_SESSION['id_users']; // Mengambil ID pengguna yang sedang login

// Query untuk mengambil riwayat tes berdasarkan ID pengguna
$sql = "SELECT score, stress_level, test_date FROM stress_test_results WHERE id_users = ? ORDER BY test_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_users);
$stmt->execute();
$result = $stmt->get_result();

// Menampilkan tabel riwayat tes
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RelaxaMind</title>
    <link rel="icon" href="assets/img/logo/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Style AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />
  </head>

  <body>
  <?php include 'includes/navbar.php'; ?>
  
  <section class="riwayat-tes py-5" style="min-height: calc(100vh - 156px)">
    <div class="container">
      <h2 class="judul text-center">RIWAYAT TES</h2>
      <table class="table table-bordered border-primary text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Tingkat Stres</th>
                    <th scope="col">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Periksa apakah ada hasil tes
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        $score = $row['score'];
                        $stress_level = $row['stress_level'];
                        $created_at = date('d-m-Y H:i:s', strtotime($row['test_date'])); // Format tanggal dan waktu

                        echo "<tr>
                                <th scope='row'>$no</th>
                                <td>$score</td>
                                <td>$stress_level</td>
                                <td>$created_at</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada riwayat tes.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
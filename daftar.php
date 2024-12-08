<?php
session_start();
include "admin/config/database.php";

// Cek apakah pengguna sudah login dengan memeriksa session username
if (isset($_SESSION['username'])) {
    // Jika sudah login, redirect ke halaman index.php
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        // Ambil input dari form
        $nama = htmlspecialchars(trim($_POST["nama"]));
        $umur = htmlspecialchars(trim($_POST["umur"]));
        $jenis_kelamin = trim($_POST["jenis_kelamin"]);
        $username = strtolower(htmlspecialchars(trim($_POST["username"])));
        $password = htmlspecialchars(trim($_POST["password"]));

        // Validasi input
        if (empty($nama) || empty($umur) || empty($jenis_kelamin) || empty($username) || empty($password)) {
            echo "<script>alert('Semua field harus diisi.'); window.location.href = 'daftar.php';</script>";
            exit;
        }

        // Hash password
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Periksa apakah username sudah ada
        $sql_check = "SELECT username FROM tbl_users WHERE username = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $username);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            echo "<script>alert('Username sudah digunakan.'); window.location.href = 'daftar.php';</script>";
            exit;
        }
        $stmt_check->close();

        // Masukkan data ke database
        $sql_insert = "INSERT INTO tbl_users (nama, umur, jenis_kelamin, username, password) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sisss", $nama, $umur, $jenis_kelamin, $username, $password_hashed);

        if ($stmt_insert->execute()) {
            echo "<script>alert('Pendaftaran berhasil! Silakan masuk.'); window.location.href = 'masuk.php';</script>";
        } else {
            echo "<script>alert('Pendaftaran gagal. Silakan coba lagi.'); window.location.href = 'daftar.php';</script>";
        }
        $stmt_insert->close();
    }
}
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

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />
    
    <!-- My CSS -->
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #e3eaef;
        }

        h4 {
            color: #858796;
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container py-5 d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-4 py-4 rounded bg-white border-top border-primary">
                <h4 class="pb-4 fw-normal">Daftar</h4>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama"
                            name="nama"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input
                            type="number"
                            class="form-control"
                            id="umur"
                            name="umur"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakilaki" value="Laki-laki" required>
                            <label class="form-check-label" for="lakilaki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username <a href="#" class="text-decoration-none" data-bs-toggle="popover"
                        data-bs-title="Username"
                        data-bs-content="Username harus terdiri dari minimal 6 huruf kecil, tanpa spasi atau simbol."><sup class="text-secondary">?</sup></a></label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            autocomplete="off"
                            pattern="[a-z0-9]+"
                            minlength="6"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <a href="#" class="text-decoration-none" data-bs-toggle="popover"
                        data-bs-title="Password"
                        data-bs-content="Minimal panjang password adalah 8 dan tidak boleh mengandung spasi."><sup class="text-secondary">?</sup></a></label>
                        <div class="input-group">
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                autocomplete="off"
                                required
                                minlength="8"
                            />
                            <button
                                class="btn btn-outline-secondary"
                                type="button"
                                id="togglePassword"
                            >
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                    <p></p>
                    <p>Sudah punya akun? <a href="masuk.php">Masuk sekarang</a></p>
                    <p>Kembali ke <a href="index.php">Beranda</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Start Footer -->
    <footer class="footer text-center">
      <p class="text-white">
        Copyright &copy; 2024 RelaxaMind. All Rights Reserved.
      </p>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap Script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Script for toggle functionality -->
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const passwordField = document.querySelector("#password");

        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        togglePassword.addEventListener("click", function () {
            // Toggle the type attribute
            const type =
                passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);

            // Toggle the icon
            this.innerHTML =
                type === "password"
                    ? '<i class="bi bi-eye"></i>'
                    : '<i class="bi bi-eye-slash"></i>';
        });
    </script>
</body>
</html>

<?php
session_start();

// Cek apakah pengguna sudah login dengan memeriksa session username
if (isset($_SESSION['username'])) {
    // Jika sudah login, redirect ke halaman index.php
    header("Location: index.php");
    exit();
}

include "admin/config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        // Validasi input kosong
        if (empty($username) || empty($password)) {
            echo "<script>alert('Username dan password harus diisi.'); window.location.href = 'login.php';</script>";
            exit;
        }

        // Query untuk mendapatkan user berdasarkan username
        $sql = "SELECT * FROM tbl_users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Periksa apakah username ditemukan
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $passdatabase = $user['password']; // Password yang di-hash

            // Verifikasi password
            if (password_verify($password, $passdatabase)) {
                // Set session
                $_SESSION['id_users'] = $user['id_users']; 
                $_SESSION["username"] = $user['username'];
                $_SESSION['nama'] = $user['nama'];

                // Redirect ke halaman index.php
                header("Location: index.php");
                exit;
            }
        }
        
        // Jika username atau password salah, tampilkan pesan umum
        echo "<script>alert('Login gagal. Silakan coba lagi.'); window.location.href = 'masuk.php';</script>";
        exit;
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

    <div class="container py-5 d-flex flex-column justify-content-center" style="min-height: calc(100vh - 156px)">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-4 py-4 rounded bg-white border-top border-primary">
                <h4 class="pb-4 fw-normal">Masuk</h4>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                autocomplete="off"
                                required
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
                    <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
                    <p></p>
                    <p>Belum punya akun? <a href="daftar.php">Daftar sekarang</a></p>
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

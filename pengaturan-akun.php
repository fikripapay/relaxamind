<?php
session_start();
include "admin/config/database.php";

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: masuk.php");
    exit();
}

$id_users = $_SESSION['id_users']; // Mengambil ID pengguna yang sedang login

// Query untuk mengambil data pengguna berdasarkan id_users
$sql = "SELECT * FROM tbl_users WHERE id_users = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_users);
$stmt->execute();
$result = $stmt->get_result();

// Cek apakah data pengguna ditemukan
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Ambil data pengguna
    $username = $user['username'];
    $nama = $user['nama'];
    $umur = $user['umur'];
    $jenis_kelamin = $user['jenis_kelamin'];
} else {
    echo "Pengguna tidak ditemukan.";
    exit();
}

// Proses jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nama = trim($_POST["nama"]);
    $umur = trim($_POST["umur"]);
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $password = $_POST["password"];
    
    // Validasi input
    if (empty($nama) || empty($umur) || empty($jenis_kelamin)) {
        echo "<script>alert('Semua kolom harus diisi kecuali password.');</script>";
    } else {
        if (!empty($password)) {
            // Jika password diisi, hash password dan update
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE tbl_users SET nama = ?, umur = ?, jenis_kelamin = ?, password = ? WHERE id_users = ?";
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("ssssi", $nama, $umur, $jenis_kelamin, $password_hash, $id_users);
        } else {
            // Jika password kosong, update tanpa mengubah password
            $update_sql = "UPDATE tbl_users SET nama = ?, umur = ?, jenis_kelamin = ? WHERE id_users = ?";
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("sssi", $nama, $umur, $jenis_kelamin, $id_users);
        }
        
        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil diperbarui.'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.');</script>";
        }
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

    <!-- Style AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />

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
                <form action="" method="post">
                    <!-- Hidden Field for ID and Username -->
                    <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">
                    <input type="hidden" name="username" value="<?php echo $username; ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama"
                            name="nama"
                            value="<?php echo $nama; ?>"
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
                            value="<?php echo $umur; ?>"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakilaki" value="Laki-laki" <?php echo ($jenis_kelamin == "Laki-laki" ? "checked" : ""); ?> required>
                            <label class="form-check-label" for="lakilaki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php echo ($jenis_kelamin == "Perempuan" ? "checked" : ""); ?> required>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            value="<?php echo $username; ?>"
                            autocomplete="off"
                            required
                            readonly
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
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

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

  <?php include 'includes/footer.php'; ?>
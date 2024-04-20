<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Cek apakah username dan password sesuai dengan yang diinginkan
    if ($username === "admin" && $password === "admin") {
        // Set session
        $_SESSION["username"] = $username;
        
        // Redirect ke halaman admin.php
        header("Location: index.php");
        exit;
    } else {        
        // Jika username atau password tidak sesuai, berikan pesan error menggunakan JavaScript
        echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
        exit;
    }
  }
}
?>


<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Admin</title>
    <link rel="icon" href="assets/img/icon/icon.png" />

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
    <div class="container vh-100 d-flex flex-column justify-content-center">
      <div class="row justify-content-center">
        <div
          class="col-10 col-md-8 col-lg-4 py-4 rounded bg-white border-top border-primary"
        >
          <h4 class="pb-4 fw-normal">Login</h4>
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input
                type="text"
                class="form-control"
                id="username"
                name="username"
                autocomplete="off"
              />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                autocomplete="off"
              />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

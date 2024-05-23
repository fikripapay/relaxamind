<?php
// Mengecek apakah variabel $_GET['user'] telah diset
if (isset($_GET['user'])){
    // Menyimpan nilai $_GET['user'] ke dalam variabel $user
    $user = $_GET['user'];

    // Query untuk mengambil data admin berdasarkan username
    $query = "SELECT * FROM tbl_user WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika data ditemukan
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            // Menyimpan data username dan password ke dalam variabel
            $username = $row['username'];
            $password = $row['password'];
        }
    }
}
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">EDIT DATA ADMIN</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Judul bagian form -->
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=admin" method="post" enctype="multipart/form-data">                     
            <div class="form-group">
                <!-- Input hidden untuk menyimpan nilai username -->
                <input type="hidden" id="username" name="username" value="<?php echo $username ?>">
            </div>
            <div class="form-group">
                <!-- Menampilkan label username -->
                <label for="username">Username:</label>
                <!-- Input untuk menampilkan dan menonaktifkan nilai username -->
                <input type="text" class="form-control" value="<?php echo $username ?>" disabled>
            </div>
            <div class="form-group">
                <!-- Menampilkan label password -->
                <label for="password">Password:</label>
                <!-- Input untuk memasukkan password baru -->
                <input type="text" name="password" minlength="8" pattern="^[a-zA-Z0-9!@#$%^&*()-_=+{};:,.<>?]+$">
            </div>
            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
            <!-- Tombol untuk kembali -->
            <a href="index.php?page=admin" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

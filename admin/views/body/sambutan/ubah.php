<?php
// Jika terdapat parameter 'id' dalam URL
if (isset($_GET['id'])){
    // Mendapatkan nilai dari parameter 'id'
    $id = $_GET['id'];

    // Query untuk mengambil data sambutan berdasarkan ID
    $query = "SELECT * FROM tbl_sambutan WHERE id_sambutan = ?";
    // Persiapan statement SQL
    $stmt = $conn->prepare($query);
    // Binding parameter 'id' ke statement
    $stmt->bind_param("s", $id);
    // Eksekusi statement
    $stmt->execute();
    // Mendapatkan hasil dari eksekusi statement
    $result = $stmt->get_result();

    // Jika terdapat hasil data
    if ($result->num_rows > 0){
        // Loop melalui hasil query dan ambil data
        while ($row = $result->fetch_assoc()){
            $id_sambutan = $row['id_sambutan'];
            $foto_kepsek = $row['foto_kepsek'];
            $nama_kepsek = $row['nama_kepsek'];
            $sambutan = $row['sambutan'];
        }
    }
}
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">EDIT SAMBUTAN KEPALA SEKOLAH</h1>
</div>
<!-- Card untuk form edit sambutan -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Judul form -->
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <!-- Form untuk mengupdate data sambutan -->
        <form action="index.php?page=sambutan" method="post" enctype="multipart/form-data">                     
    
            <div class="form-group">
                <!-- Input hidden untuk menyimpan ID sambutan -->
                <input type="hidden" id="id_sambutan" name="id_sambutan" value="<?php echo $id_sambutan ?>">
            </div>
            <div class="form-group">
                <!-- Input untuk mengunggah foto -->
                <label for="foto_kepsek">Upload Foto:</label>
                <input type="file" class="form-control" id="foto_kepsek" name="foto_kepsek" required>
            </div>
            <div class="form-group">
                <!-- Input untuk mengubah nama kepala sekolah -->
                <label for="nama_kepsek">Nama:</label>
                <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" value="<?php echo $nama_kepsek ?>" required>
            </div>
            <div class="form-group">
                <!-- Input untuk mengubah sambutan -->
                <label for="sambutan">Sambutan:</label>
                <textarea class="form-control" id="sambutan" name="sambutan"><?php echo $sambutan ?></textarea>
            </div>

            <!-- Tombol untuk menyubmit form -->
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
            <!-- Tombol untuk kembali ke halaman data sambutan -->
            <a href="index.php?page=sambutan" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

<?php
// Jika terdapat parameter 'id' dalam URL
if (isset($_GET['id'])){
    // Mendapatkan nilai dari parameter 'id'
    $id = $_GET['id'];

    $query = "SELECT * FROM tbl_dataps WHERE id_dataps = ?";
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
            $id_dataps = $row['id_dataps'];
            $nama = $row['nama'];
            $jenis_kelamin = $row['jenis_kelamin'];
            $pendidikan = $row['pendidikan'];
            $jabatan = $row['jabatan'];
            $deskripsi = $row['deskripsi'];
        }
    }
}
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">EDIT DATA PENGAJAR DAN STAFF</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Judul bagian form -->
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data Baru</h6>
    </div>
    <div class="card-body">
        <!-- Form untuk menambah data -->
        <form action="index.php?page=dataps" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <!-- Input hidden untuk menyimpan ID-->
              <input type="hidden" id="id_dataps" name="id_dataps" value="<?php echo $id_dataps ?>">
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" required>
                </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <label>Jenis Kelamin:</label>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakilaki" value="Laki-laki" <?php if($jenis_kelamin == 'Laki-laki') echo 'checked'; ?> required>
                      <label class="form-check-label" for="lakilaki">
                          Laki-Laki
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php if($jenis_kelamin == 'Perempuan') echo 'checked'; ?> required>
                      <label class="form-check-label" for="perempuan">
                          Perempuan
                      </label>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="pendidikan">Pendidikan:</label>
                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?php echo $pendidikan ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $jabatan ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" required><?php echo $deskripsi ?></textarea>
                </div>
            </div>
            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
            <!-- Tombol untuk kembali -->
            <a href="index.php?page=dataps" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

<script>
    window.alert("cek");
</script>

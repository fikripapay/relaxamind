<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">TAMBAH DATA PENGAJAR DAN STAFF</h1>
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
            <!-- Baris pertama -->
            <div class="row">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <label>Jenis Kelamin:</label>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakilaki" value="Laki-laki" required>
                      <label class="form-check-label" for="lakilaki">
                          Laki-Laki
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                      <label class="form-check-label" for="perempuan">
                          Perempuan
                      </label>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="pendidikan">Pendidikan:</label>
                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" required></textarea>
                </div>
            </div>
            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <!-- Tombol untuk kembali -->
            <a href="index.php?page=dataps" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">TAMBAH DATA DOKUMENTASI SEKOLAH</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Judul form -->
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=galeri" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group">
                    <!-- Input untuk upload gambar -->
                    <label for="galeri">Upload Foto:</label>
                    <input type="file" class="form-control" id="galeri" name="galeri">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <!-- Input untuk deskripsi -->
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
                </div>
            </div>
            <!-- Tombol submit dan kembali -->
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <a href="index.php?page=galeri" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

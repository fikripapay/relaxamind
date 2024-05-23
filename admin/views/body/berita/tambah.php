<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">TAMBAH DATA BERITA</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Judul bagian form -->
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data Berita</h6>
    </div>
    <div class="card-body">
        <!-- Form untuk menambah data berita -->
        <form action="index.php?page=berita" method="post" enctype="multipart/form-data">
            <!-- Baris pertama -->
            <div class="row">
                <div class="form-group">
                    <!-- Label untuk input judul berita -->
                    <label for="judul">Judul Berita:</label>
                    <!-- Input untuk memasukkan judul berita -->
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
            </div>
            <!-- Baris kedua -->
            <div class="row">
                <div class="form-group">
                    <!-- Label untuk input isi berita -->
                    <label for="berita">Isi Berita:</label>
                    <!-- Informasi tambahan tentang penulisan isi berita -->
                    <div class="alert alert-warning" role="alert">
                        Gunakan titik 3 "..." pada penulisan untuk membuat paragraf baru!
                        <p>Paragraf 1</p>
                        <p>...</p>
                        <p>Paragraf 2</p>
                    </div>
                    <!-- Textarea untuk memasukkan isi berita -->
                    <textarea name="berita" id="berita" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <!-- Baris ketiga -->
            <div class="row">
                <div class="form-group">
                    <!-- Label untuk input thumbnail berita -->
                    <label for="thumbnail">Upload Thumbnail Berita:</label>
                    <!-- Input untuk mengunggah thumbnail berita -->
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>
            </div>
            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <!-- Tombol untuk kembali -->
            <a href="index.php?page=berita" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

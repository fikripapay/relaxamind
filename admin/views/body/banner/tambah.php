<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">TAMBAH DATA BANNER</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Judul bagian form -->
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=banner" method="post" enctype="multipart/form-data">                     
            <div class="row">
                <div class="form-group mr-2">
                    <!-- Label untuk input nama -->
                    <label for="nama">Nama Banner (No Spasi):</label>
                    <!-- Input untuk memasukkan nama banner -->
                    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                </div>
                <div class="form-group">
                    <!-- Label untuk input banner -->
                    <label for="banner">Upload Banner:</label>
                    <!-- Input untuk mengunggah banner -->
                    <input type="file" class="form-control" id="banner" name="banner">
                </div>
            </div>
            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <!-- Tombol untuk kembali -->
            <a href="index.php?page=banner" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>

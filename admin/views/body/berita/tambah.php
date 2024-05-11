<div>
    <h1 class="h3 mb-4 text-gray-800">TAMBAH DATA BERITA</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data Berita</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=berita" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group">
                    <label for="judul">Judul Berita:</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="berita">Isi Berita:</label>
                    <textarea name="berita" id="berita" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="thumbnail">Upload Thumbnail Berita:</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <a href="index.php?page=berita" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>
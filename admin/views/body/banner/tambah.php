<div>
    <h1 class="h3 mb-4 text-gray-800">TAMBAH DATA BANNER</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=banner" method="post" enctype="multipart/form-data">                     
            <div class="row">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="banner">Upload Banner:</label>
                    <input type="file" class="form-control" id="banner" name="banner">
                </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <a href="index.php?page=banner" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>
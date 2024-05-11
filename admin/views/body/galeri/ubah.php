<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM tbl_sambutan WHERE id_sambutan = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param ("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0){
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
    <h1 class="h3 mb-4 text-gray-800">EDIT SAMBUTAN KEPALA SEKOLAH</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=sambutan" method="post" enctype="multipart/form-data">                     
    
                
                <div class="form-group">
                    <input type="hidden" id="id_sambutan" name="id_sambutan" value="<?php echo $id_sambutan ?>">
                </div>
                <div class="form-group">
                    <label for="foto_kepsek">Upload Foto:</label>
                    <input type="file" class="form-control" id="foto_kepsek" name="foto_kepsek" required>
                </div>
                <div class="form-group">
                    <label for="nama_kepsek">Nama:</label>
                    <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" value="<?php echo $nama_kepsek ?>" required>
                </div>
                <div class="form-group">
                    <label for="sambutan">Sambutan:</label>
                    <textarea class="form-control" id="sambutan" name="sambutan"><?php echo $sambutan ?></textarea>
                </div>

            <button type="submit" name="update" class="btn btn-primary">Submit</button>
            <a href="index.php?page=sambutan" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>
<?php
require_once 'controller/galeri.php';
?>

<div>
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA DOKUMENTASI SEKOLAH </h1>
</div>
<?php
if (isset($_GET['insert'])) {
?>
    <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dimasukan Ke Database.
    </div>
<?php
} else if (isset($_GET['delete'])) {
?>
    <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus Dari Database.
    </div>
<?php
} else if (isset($_GET['update'])) {
?>
    <div class="alert alert-primary" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diubah Ke Database.
    </div>
<?php
}
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="index.php?page=tambah_galeri" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50"></span>
            <span class="text">Tambah Data</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Konten</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "config/database.php";
                    $no = 0;
                    $sql = "SELECT * FROM tb_galeri";
                    // Eksekusi query
                    $result = $conn->query($sql);
                    // Loop melalui hasil query dan tampilkan dalam tabel
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $no++;
                            echo "<tr>";
                    ?>
                            <th scope='row'> <?php echo $no ?></th>
                            <?php
                            echo "<td><img src='" . $row["path"] . "' alt='" . $row["deskripsi"] . "' style='width: 200px; height: auto;'></td>";
                            echo "<td>" . $row["deskripsi"] . "</td>";
                            echo "<td>";
                            ?>
                            <a href='index.php?page=galeri&hapus=<?php echo $row["id"] ?>&nama=<?php echo basename($row['path']) ?>' class='btn btn-danger' style='margin-left: 5px;' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <span class='text'>Hapus</span>
                            </a>
                    <?php

                            echo "</td></tr>";
                        }
                    }
                    // Tutup koneksi database
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
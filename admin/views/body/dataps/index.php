<?php
// Memuat file controller dataps
require_once 'controller/dataps.php';
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA PENGAJAR DAN STAFF</h1>
</div>

<?php
// Memeriksa apakah terdapat parameter 'insert' dalam URL
if (isset($_GET['insert'])) {
?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dimasukan Ke Database.
    </div>
<?php
// Memeriksa apakah terdapat parameter 'delete' dalam URL
} else if (isset($_GET['delete'])) {
?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus Dari Database.
    </div>
<?php
// Memeriksa apakah terdapat parameter 'update' dalam URL
} else if (isset($_GET['update'])) {
?>
    <div class="alert alert-primary" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diubah.
    </div>
<?php
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Tombol untuk menuju halaman tambah data -->
        <a href="index.php?page=tambah_dataps" class="btn btn-success btn-icon-split">
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
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan</th>
                        <th>Jabatan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Memuat file konfigurasi database
                    include "config/database.php";
                    // Inisialisasi variabel nomor
                    $no = 0;
                    // Query untuk mengambil data dari tabel dataps
                    $sql = "SELECT * FROM tbl_dataps";
                    // Eksekusi query
                    $result = $conn->query($sql);
                    // Memeriksa apakah terdapat data yang ditemukan
                    if ($result->num_rows > 0) {
                        // Melakukan iterasi terhadap hasil query dan menampilkan dalam tabel
                        while ($row = $result->fetch_assoc()) {
                            $no++;
                            echo "<tr>";
                            ?>
                            <!-- Nomor urut -->
                            <th scope='row'> <?php echo $no ?></th>
                            <?php
                            echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["jenis_kelamin"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["pendidikan"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["jabatan"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["deskripsi"]) . "</td>";
                            echo "<td>";
                            ?>
                            <!-- Tombol edit -->
                            <a href='index.php?page=edit-dataps&id=<?php echo $row["id_dataps"] ?>' class='btn btn-primary' style='margin-left: 5px'>
                              <span class='text'>Edit</span>
                            </a>
                            <!-- Tombol hapus -->
                            <a href='index.php?page=dataps&hapus=<?php echo $row["id_dataps"] ?>' class='btn btn-danger' style='margin-left: 5px;' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              <span class='text'>Hapus</span>
                            </a>
                            <?php
                            echo "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data ditemukan</td></tr>";
                    }
                    // Menutup koneksi database
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

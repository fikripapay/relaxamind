<?php
// Memanggil file controller/berita.php
require_once 'controller/berita.php';
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA BERITA</h1>
</div>

<?php
// Menampilkan pesan sukses jika data berhasil dimasukkan
if (isset($_GET['insert'])) {
?>
<div class="alert alert-success" role="alert">
    <!-- Tombol untuk menutup pesan -->
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Data Berhasil Dimasukkan Ke Database.
</div>
<?php
} else if (isset($_GET['delete'])) {
// Menampilkan pesan sukses jika data berhasil dihapus
?>
<div class="alert alert-danger" role="alert">
    <!-- Tombol untuk menutup pesan -->
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Data Berhasil Dihapus Dari Database.
</div>
<?php
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Tombol untuk menuju halaman tambah berita -->
        <a href="index.php?page=tambah_berita" class="btn btn-success btn-icon-split">
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
                        <th>Thumbnail</th>
                        <th>Judul</th>
                        <th>Berita</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Memanggil file config/database.php
                    include "config/database.php";
                    $no = 0;
                    // Query untuk mengambil data berita dari tabel tb_berita
                    $sql = "SELECT * FROM tb_berita";
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
                            // Menampilkan thumbnail berita
                            echo "<td><img src='" . $row["thumbnail"] . "' alt='" . $row["judul"] . "' style='width: 200px; height: auto;'></td>";
                            // Menampilkan judul berita
                            echo "<td>" . $row["judul"] . "</td>";
                            // Menampilkan isi berita
                            echo "<td>" . "..." . "</td>";
                            // Menampilkan waktu berita
                            echo "<td>" . $row["waktu"] . "</td>";
                            echo "<td>";
                    ?>
                    <!-- Tombol hapus -->
                    <a href='index.php?page=berita&hapus=<?php echo $row["id"] ?>&nama=<?php echo basename($row['thumbnail']) ?>' class='btn btn-danger'
                        style='margin-left: 5px' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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

<?php
// Memuat file controller galeri
require_once 'controller/galeri.php';
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA GALERI SEKOLAH </h1>
</div>
<?php
// Memeriksa apakah terdapat parameter 'insert' dalam URL
if (isset($_GET['insert'])) {
    // Menampilkan pesan sukses jika data berhasil dimasukkan ke database
?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dimasukan Ke Database.
    </div>
<?php
// Memeriksa apakah terdapat parameter 'delete' dalam URL
} else if (isset($_GET['delete'])) {
    // Menampilkan pesan sukses jika data berhasil dihapus dari database
?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus Dari Database.
    </div>
<?php
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Tombol untuk menuju halaman tambah galeri -->
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
                        <th>Foto</th>
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
                    // Query untuk mengambil data dari tabel galeri
                    $sql = "SELECT * FROM tb_galeri";
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
                            // Menampilkan konten gambar
                            echo "<td><img src='" . $row["path"] . "' alt='" . $row["deskripsi"] . "' style='width: 200px; height: auto;'></td>";
                            // Menampilkan keterangan
                            echo "<td>" . $row["deskripsi"] . "</td>";
                            echo "<td>";
                            ?>
                            <!-- Tombol hapus dengan konfirmasi -->
                            <a href='index.php?page=galeri&hapus=<?php echo $row["id"] ?>&nama=<?php echo basename($row['path']) ?>' class='btn btn-danger' style='margin-left: 5px;' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <span class='text'>Hapus</span>
                            </a>
                    <?php

                            echo "</td></tr>";
                        }
                    }
                    // Menutup koneksi database
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

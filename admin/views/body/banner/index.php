<?php
// Memanggil file controller/banner.php
require_once 'controller/banner.php';
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA BANNER</h1>
</div>

<?php
// Menampilkan pesan sukses jika data berhasil dimasukkan
if(isset($_GET['insert'])) {
?>
    <div class="alert alert-success" role="alert">
        <!-- Tombol untuk menutup pesan -->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dimasukkan Ke Database.
    </div> 
<?php
} 
// Menampilkan pesan sukses jika data berhasil dihapus
else if(isset($_GET['delete'])) {
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
        <!-- Tombol untuk menuju halaman input banner -->
        <a href="index.php?page=input-banner" class="btn btn-success btn-icon-split">
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
                        <th>Nama Banner</th>
                        <th>Banner</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Memanggil file config/database.php
                        include "config/database.php";
                        $no=0;
                        // Query untuk mengambil data banner dari tabel tbl_banner
                        $sql = "SELECT * FROM tbl_banner";
                        // Eksekusi query
                        $result = $conn->query($sql);
                        // Loop melalui hasil query dan tampilkan dalam tabel
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $no++;
                                echo "<tr>";
                                ?>
                                <!-- Menampilkan nomor urut -->
                                <th scope='row'> <?php echo $no ?></th> 
                                <?php
                                    // Menampilkan data nama banner
                                    echo "<td>" . $row["nama"] . "</td>";
                                    // Menampilkan gambar banner
                                    echo "<td><img src='". $row["path"] ."' alt='". $row["nama"] ."' style='width: 200px; height: auto;'></td>";
                                    // Menampilkan tombol hapus banner
                                    echo "<td>";
                                    ?>
                                    <!-- Tombol hapus -->
                                    <a href='index.php?page=banner&hapus=<?php echo $row["id_banner"] ?>&nama=<?php echo $row["nama"] ?>' class='btn btn-danger' style='margin-left: 5px;' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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

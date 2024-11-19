<?php
// Memanggil file controller untuk data sambutan
require_once 'controller/sambutan.php';
?>

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA SAMBUTAN KEPALA SEKOLAH </h1>
</div>
<?php
// Menampilkan pesan alert jika terdapat parameter 'update' dalam URL
if(isset($_GET['update'])) {
?>
    <div class="alert alert-primary" role="alert">
        <!-- Tombol close untuk menutup alert -->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diupdate Ke Database.
    </div> 
<?php
} 
?>
<div class="card shadow mb-4">    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!-- Kolom-kolom tabel -->
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Sambutan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mengambil koneksi database
                    include "config/database.php";
                    // Inisialisasi nomor urut
                    $no=0;
                    // Query untuk mengambil data sambutan kepala sekolah
                    $sql = "SELECT * FROM tbl_sambutan";
                    // Eksekusi query
                    $result = $conn->query($sql);
                    // Loop melalui hasil query dan tampilkan dalam tabel
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $no++;
                            echo "<tr>";
                    ?>
                            <!-- Nomor urut -->
                            <th scope='row'> <?php echo $no ?></th> 
                    <?php
                            // Tampilkan foto, nama kepala sekolah, dan sambutan
                            echo "<td><img src='". $row["foto_kepsek"] ."' alt='". $row["nama_kepsek"] ."' style='width: 200px; height: auto;'></td>";
                            echo "<td>" . $row["nama_kepsek"] . "</td>";
                            echo "<td>" . $row["sambutan"] . "</td>";
                            echo "<td>";
                    ?>
                            <!-- Tombol edit yang mengarah ke halaman edit-sambutan -->
                            <a href='index.php?page=edit-sambutan&id=<?php echo $row["id_sambutan"] ?>' class='btn btn-primary' style='margin-left: 5px'>
                                <span class='text'>Edit</span>
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

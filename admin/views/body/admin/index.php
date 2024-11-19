<?php
// Memanggil file controller/admin.php
require_once 'controller/admin.php';
?>

<div >
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA ADMIN</h1>
</div>

<?php
// Menampilkan pesan sukses jika password berhasil diubah
if(isset($_GET['update'])) {
?>
    <div class="alert alert-primary" role="alert">
        <!-- Tombol untuk menutup pesan -->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Password Berhasil Diubah.
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
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Memanggil file config/database.php
                        include "config/database.php";
                        $no=0;
                        // Query untuk mengambil data user dari tabel tbl_user
                        $sql = "SELECT * FROM tbl_user";
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
                                    // Menampilkan data username
                                    echo "<td>" . $row["username"] . "</td>";
                                    // Menampilkan data password
                                    echo "<td>" . $row["password"] . "</td>";
                                    // Menampilkan tombol edit untuk mengedit admin
                                    echo "<td>";
                                    ?>
                                    <!-- Tombol edit -->
                                    <a href='index.php?page=edit-admin&user=<?php echo $row["username"] ?>' class='btn btn-primary' style='margin-left: 5px'>
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

<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA PENGGUNA RELAXAMIND</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Memuat file konfigurasi database
                    include "config/database.php";
                    // Inisialisasi variabel nomor
                    $no = 0;
                    $sql = "SELECT id_users, username, nama, jenis_kelamin, umur
                            FROM tbl_users";
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
                            <th scope="row"><?php echo $no; ?></th>
                            <?php
                            // Menampilkan data dari hasil query
                            echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["jenis_kelamin"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["umur"]) . "</td>";
                            ?>
                            <?php
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data ditemukan</td></tr>";
                    }
                    // Menutup koneksi database
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

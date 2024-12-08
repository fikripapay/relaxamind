<div>
    <!-- Judul halaman -->
    <h1 class="h3 mb-4 text-gray-800 text-center">DATA RIWAYAT TES</h1>
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
                        <th>Nilai</th>
                        <th>Tingkat Stres</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Memuat file konfigurasi database
                    include "config/database.php";
                    // Inisialisasi variabel nomor
                    $no = 0;
                    // Query untuk mengambil data dari tabel stress_test_results dan menggabungkannya dengan tbl_users
                    $sql = "SELECT r.id, r.id_users, u.username, u.nama, u.jenis_kelamin, u.umur, r.score, r.stress_level, r.test_date
                            FROM stress_test_results r
                            JOIN tbl_users u ON r.id_users = u.id_users
                            ORDER BY r.test_date DESC"; // Mengurutkan berdasarkan waktu tes terbaru
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
                            <th scope='row'><?php echo $no; ?></th>
                            <?php
                            // Menampilkan data dari hasil query
                            echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["jenis_kelamin"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["umur"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["score"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["stress_level"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["test_date"]) . "</td>";
                            ?>
                            <?php
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>Tidak ada data ditemukan</td></tr>";
                    }
                    // Menutup koneksi database
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

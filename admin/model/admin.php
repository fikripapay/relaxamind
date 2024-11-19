<?php
// Mendefinisikan kelas Admin_Model
class Admin_Model {
    // Metode untuk mengupdate data admin
    public function updateAdmin($username, $password, $conn) {
        // Mempersiapkan statement SQL untuk mengupdate password dengan MD5 hashing
        $stmt = $conn->prepare("UPDATE tbl_user SET `password` = MD5(?) WHERE username = ?");
        // Mengikat parameter ke dalam statement SQL
        $stmt->bind_param("ss", $password, $username);
        
        // Menjalankan statement SQL dan mengembalikan hasilnya
        if ($stmt->execute()) {
            return true; // Jika berhasil mengupdate data
        } else {
            return false; // Jika gagal mengupdate data
        }
    }
}
?>

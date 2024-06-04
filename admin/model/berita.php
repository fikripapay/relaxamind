<?php
// Class untuk model Berita

class Berita_Model {

    // Method untuk menambahkan berita baru
    public function tambahBerita($path, $judul, $berita, $conn) {
        $stmt = $conn->prepare("INSERT INTO tb_berita (`thumbnail`, `judul`, `berita`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $path, $judul, $berita);

        // Eksekusi statement SQL untuk menambahkan berita
        if ($stmt->execute()) {
            return true; // Jika berhasil memasukkan data
        } else {
            return false; // Jika gagal memasukkan data
        }
    }

    // Method untuk menghapus berita
    public function hapusBerita($id_berita, $conn) {
        // Query untuk mendapatkan path thumbnail berdasarkan id_berita
        $stmt_select = $conn->prepare("SELECT thumbnail FROM tb_berita WHERE id = ?");
        $stmt_select->bind_param("i", $id_berita);
        $stmt_select->execute();
        $result_select = $stmt_select->get_result();
    
        if ($result_select->num_rows > 0) {
            $row = $result_select->fetch_assoc();
            $thumbnail_path = $row['thumbnail'];
    
            // Hapus file thumbnail berita dari direktori jika ada
            if (file_exists($thumbnail_path)) {
                unlink($thumbnail_path);
            }
    
            // Hapus record berita dari database
            $stmt_delete = $conn->prepare("DELETE FROM tb_berita WHERE id = ?");
            $stmt_delete->bind_param("i", $id_berita);
    
            // Eksekusi statement SQL untuk menghapus berita
            if ($stmt_delete->execute()) {
                return true; // Jika berhasil menghapus data
            } else {
                return false; // Jika gagal menghapus data
            }
        } else {
            return false; // Jika tidak menemukan data dengan id_berita
        }
    }
    
}
?>

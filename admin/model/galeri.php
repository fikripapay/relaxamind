<?php
// Class untuk model Galeri

class Galeri_Model {

    // Method untuk menambahkan item galeri baru
    public function tambahGaleri($path, $deskripsi, $conn) {
        $stmt = $conn->prepare("INSERT INTO tb_galeri (`path`, `deskripsi`) VALUES (?, ?)");
        $stmt->bind_param("ss", $path, $deskripsi);

        // Eksekusi statement SQL untuk menambahkan item galeri
        if ($stmt->execute()) {
            return true; // Jika berhasil memasukkan data
        } else {
            return false; // Jika gagal memasukkan data
        }
    }

    // Method untuk menghapus item galeri
    public function hapusGaleri($id_galeri, $conn) {

        /// Query untuk mendapatkan path galeri berdasarkan id_galeri
        $stmt_select = $conn->prepare("SELECT path FROM tb_galeri WHERE id = ?");
        $stmt_select->bind_param("i", $id_galeri);
        $stmt_select->execute();
        $result_select = $stmt_select->get_result();
    
        if ($result_select->num_rows > 0) {
            $row = $result_select->fetch_assoc();
            $galeri_path = $row['path'];
    
            // Hapus file foto dari direktori jika ada
            if (file_exists($galeri_path)) {
                unlink($galeri_path);
            }
    
            // Hapus record galeri dari database
            $stmt_delete = $conn->prepare("DELETE FROM tb_galeri WHERE id = ?");
            $stmt_delete->bind_param("i", $id_galeri);
    
            // Eksekusi statement SQL untuk menghapus galeri
            if ($stmt_delete->execute()) {
                return true; // Jika berhasil menghapus data
            } else {
                return false; // Jika gagal menghapus data
            }
        } else {
            return false; // Jika tidak menemukan data dengan id_galeri
        }
    }
}
?>

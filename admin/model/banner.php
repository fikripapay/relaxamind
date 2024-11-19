<?php
// Class untuk model Banner

class Banner_Model {

    // Method untuk menambahkan banner baru
    public function tambahBanner($nama, $tujuan_banner, $conn) {
        $stmt = $conn->prepare("INSERT INTO tbl_banner (`nama`, `path`) VALUES (?, ?)");
        $stmt->bind_param("ss", $nama, $tujuan_banner);
        
        // Eksekusi statement SQL untuk menambahkan banner
        if ($stmt->execute()) {
            return true; // Jika berhasil memasukkan data
        } else {
            return false; // Jika gagal memasukkan data
        }
    }

    // Method untuk menghapus banner
    public function hapusBanner($id_banner, $nama_banner, $conn) {
        
        // Hapus file gambar banner dari direktori
        unlink("../assets/img/hero/$nama_banner.png");

        $stmt = $conn->prepare("DELETE FROM tbl_banner WHERE id_banner = ?");
        $stmt->bind_param("i", $id_banner);
        
        // Eksekusi statement SQL untuk menghapus banner
        if ($stmt->execute()) {
            return true; // Jika berhasil menghapus data
        } else {
            return false; // Jika gagal menghapus data
        }
    }
}
?>

<?php
// Class untuk model Sambutan

class Sambutan_Model {
    
    // Method untuk mengupdate sambutan
    public function updateSambutan($tujuan_banner, $nama_kepsek, $sambutan, $id_sambutan, $conn) {
        $stmt = $conn->prepare("UPDATE tbl_sambutan SET foto_kepsek = ?, nama_kepsek = ?, sambutan = ? WHERE id_sambutan = ?");
        $stmt->bind_param("sssi", $tujuan_banner, $nama_kepsek, $sambutan, $id_sambutan);
        
        // Eksekusi statement SQL untuk mengupdate sambutan
        if ($stmt->execute()) {
            return true; // Jika berhasil mengupdate data
        } else {
            return false; // Jika gagal mengupdate data
        }
    }
}
?>

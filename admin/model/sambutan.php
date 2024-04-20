<?php
class Sambutan_Model {
    public function updateSambutan($tujuan_banner, $nama_kepsek, $sambutan, $id_sambutan, $conn) {
        $stmt = $conn->prepare("UPDATE tbl_sambutan SET foto_kepsek = ?, nama_kepsek = ?, sambutan = ? WHERE id_sambutan = ?");
        $stmt->bind_param("sssi", $tujuan_banner, $nama_kepsek, $sambutan, $id_sambutan);
        
        if ($stmt->execute()) {
            return true; // Jika berhasil mengupdate data
        } else {
            return false; // Jika gagal mengupdate data
        }
    }
}
?>

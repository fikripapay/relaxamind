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
    public function hapusGaleri($id, $namafile, $conn) {

        // Hapus file item galeri dari direktori
        unlink("../assets/img/galeri/$namafile");

        $stmt = $conn->prepare("DELETE FROM tb_galeri WHERE id = ?");
        $stmt->bind_param("i", $id);
        
        // Eksekusi statement SQL untuk menghapus item galeri
        if ($stmt->execute()) {
            return true; // Jika berhasil menghapus data
        } else {
            return false; // Jika gagal menghapus data
        }
    }
}
?>

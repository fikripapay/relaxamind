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
    public function hapusBerita($id_berita, $nama_berita, $conn) {

        // Hapus file thumbnail berita dari direktori
        unlink("../assets/img/berita/$nama_berita");

        $stmt = $conn->prepare("DELETE FROM tb_berita WHERE id = ?");
        $stmt->bind_param("i", $id_berita);

        // Eksekusi statement SQL untuk menghapus berita
        if ($stmt->execute()) {
            return true; // Jika berhasil menghapus data
        } else {
            return false; // Jika gagal menghapus data
        }
    }
}
?>

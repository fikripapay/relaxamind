<?php
class Berita_Model
{

    public function tambahBerita($path, $judul, $berita, $conn)
    {
        $stmt = $conn->prepare("INSERT INTO tb_berita (`thumbnail`, `judul`, `berita`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $path, $judul, $berita);

        if ($stmt->execute()) {
            return true; // Jika berhasil memasukkan data
        } else {
            return false; // Jika gagal memasukkan data
        }
    }

    public function hapusBerita($id_berita, $nama_berita, $conn)
    {

        unlink("../assets/img/hero/$nama_berita");

        $stmt = $conn->prepare("DELETE FROM tb_berita WHERE id = ?");
        $stmt->bind_param("i", $id_berita);

        if ($stmt->execute()) {
            return true; // Jika berhasil menghapus data
        } else {
            return false; // Jika gagal menghapus data
        }
    }
}
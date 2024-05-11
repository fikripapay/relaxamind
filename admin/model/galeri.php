<?php
class Galeri_Model
{

    public function tambahGaleri($path, $link, $deskripsi, $conn)
    {
        $stmt = $conn->prepare("INSERT INTO tb_galeri (`path`, `link`, `deskripsi`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $path, $link, $deskripsi);

        if ($stmt->execute()) {
            return true; // Jika berhasil memasukkan data
        } else {
            return false; // Jika gagal memasukkan data
        }
    }

    public function hapusGaleri($id_banner, $nama_banner, $conn)
    {

        unlink("../assets/img/hero/$nama_banner.png");

        $stmt = $conn->prepare("DELETE FROM tbl_banner WHERE id_banner = ?");
        $stmt->bind_param("i", $id_banner);

        if ($stmt->execute()) {
            return true; // Jika berhasil menghapus data
        } else {
            return false; // Jika gagal menghapus data
        }
    }
}
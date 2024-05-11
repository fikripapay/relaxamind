<?php
class Galeri_Model
{

    public function tambahGaleri($path, $deskripsi, $conn)
    {
        $stmt = $conn->prepare("INSERT INTO tb_galeri (`path`, `deskripsi`) VALUES (?, ?)");
        $stmt->bind_param("ss", $path, $deskripsi);

        if ($stmt->execute()) {
            return true; // Jika berhasil memasukkan data
        } else {
            return false; // Jika gagal memasukkan data
        }
    }

    public function hapusGaleri($id, $namafile, $conn)
    {

        unlink("../assets/img/galeri/$namafile");

        $stmt = $conn->prepare("DELETE FROM tb_galeri WHERE id = ?");
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            return true; // Jika berhasil menghapus data
        } else {
            return false; // Jika gagal menghapus data
        }
    }
}
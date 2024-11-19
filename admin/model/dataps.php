<?php
// Mendefinisikan kelas Dataps_Model
class Dataps_Model {
    // Metode untuk mengupdate data pengajar & Staff
    public function updateDataps($nama, $jenis_kelamin, $pendidikan, $jabatan, $deskripsi, $id_dataps, $conn) {
        // Mempersiapkan statement SQL
        $stmt = $conn->prepare("UPDATE tbl_dataps SET nama = ?, jenis_kelamin = ?, pendidikan = ?, jabatan = ?, deskripsi = ? WHERE id_dataps = ?");
        // Mengikat parameter ke dalam statement SQL
        $stmt->bind_param("sssssi", $nama, $jenis_kelamin, $pendidikan, $jabatan, $deskripsi, $id_dataps);
        
        // Menjalankan statement SQL dan mengembalikan hasilnya
        if ($stmt->execute()) {
            return true; // Jika berhasil mengupdate data
        } else {
            return false; // Jika gagal mengupdate data
        }
    }

    // Method untuk menambahkan Data pengajar & Staff
    public function tambahDataps($nama, $jenis_kelamin, $pendidikan, $jabatan, $deskripsi, $conn) {
      $stmt = $conn->prepare("INSERT INTO tbl_dataps (`nama`, `jenis_kelamin`, `pendidikan`, `jabatan`, `deskripsi`) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss", $nama, $jenis_kelamin, $pendidikan, $jabatan, $deskripsi);
      
      // Eksekusi statement SQL untuk menambahkan Data pengajar & Staff
      if ($stmt->execute()) {
          return true; // Jika berhasil memasukkan data
      } else {
          return false; // Jika gagal memasukkan data
      }
    }

    // Method untuk menghapus Data pengajar & Staff
    public function hapusDataps($id_dataps, $conn) {
        
      $stmt = $conn->prepare("DELETE FROM tbl_dataps WHERE id_dataps = ?");
      $stmt->bind_param("i", $id_dataps);
      
      // Eksekusi statement SQL untuk menghapus Data pengajar & Staff
      if ($stmt->execute()) {
          return true; // Jika berhasil menghapus data
      } else {
          return false; // Jika gagal menghapus data
      }
  }

}
?>

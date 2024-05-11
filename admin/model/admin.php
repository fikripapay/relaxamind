<?php
class Admin_Model {
    public function updateAdmin($username, $password, $conn) {
        $stmt = $conn->prepare("UPDATE tbl_user SET `password` = MD5(?) WHERE username = ?");
        $stmt->bind_param("ss", $password, $username);
        
        if ($stmt->execute()) {
            return true; // Jika berhasil mengupdate data
        } else {
            return false; // Jika gagal mengupdate data
        }
    }
}
?>

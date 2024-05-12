<?php
    require_once 'model/sambutan.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $controller = new Sambutan_Model();
        
        if (isset($_POST['update'])) {
            $id_sambutan = $_POST['id_sambutan'];
            $nama_kepsek = $_POST['nama_kepsek'];
            $sambutan = $_POST['sambutan'];
    
            $nama_file = $_FILES['foto_kepsek']['name'];
            $lokasi_file = $_FILES['foto_kepsek']['tmp_name'];
            $tujuan_file = "../assets/img/sambutan/$nama_kepsek.png";
    
            if (move_uploaded_file($lokasi_file, $tujuan_file)) {
                if ($controller->updateSambutan($tujuan_file, $nama_kepsek, $sambutan, $id_sambutan, $conn)) {
                    header("Location: index.php?page=sambutan&update");
                    exit();
                } 
            } else {
                echo "<script>alert('Gagal mengunggah file.');</script>";
            }
        }
    }
?>

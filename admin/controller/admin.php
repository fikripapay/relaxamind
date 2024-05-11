<?php
    require_once 'model/admin.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $controller = new Admin_Model();
        
        if (isset($_POST['update'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            if ($controller->updateAdmin($username, $password, $conn)) {
                header("Location: index.php?page=admin&update");
                exit();
            } 
            else {
                echo "<script>alert('Gagal mengganti password.');</script>";
            }
        }
    }
?>

<?php
    require('views/main/header.php');
    require('config/database.php');
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'dashboard': include 'views/body/dashboard/index.php'; break;

            case 'banner': include 'views/body/banner/index.php'; break;
            case 'input-banner': include 'views/body/banner/tambah.php'; break;

            case 'sambutan': include 'views/body/sambutan/index.php'; break;
            case 'edit-sambutan': include 'views/body/sambutan/ubah.php'; break;
            
        }
    }else{
        echo '<meta http-equiv="refresh" content="0;url=index.php?page=dashboard" />';
    }

    require('views/main/footer.php');
?>
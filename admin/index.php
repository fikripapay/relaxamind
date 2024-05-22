<?php
require('views/main/header.php');
require('config/database.php');

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'dashboard':
            include 'views/body/dashboard/index.php';
            break;

        // BANNER
        case 'banner':
            include 'views/body/banner/index.php';
            break;
        case 'input-banner':
            include 'views/body/banner/tambah.php';
            break;

        // SAMBUTAN
        case 'sambutan':
            include 'views/body/sambutan/index.php';
            break;
        case 'edit-sambutan':
            include 'views/body/sambutan/ubah.php';
            break;

        // BERITA
        case 'berita':
            include 'views/body/berita/index.php';
            break;
        case 'tambah_berita':
            include 'views/body/berita/tambah.php';
            break;
        case 'edit_berita':
            include 'views/body/berita/ubah.php';
            break;

        // GALERI
        case 'galeri':
            include 'views/body/galeri/index.php';
            break;
        case 'tambah_galeri':
            include 'views/body/galeri/tambah.php';
            break;
        case 'edit_galeri':
            include 'views/body/galeri/ubah.php';
            break;

        // DATA PENGAJAR & STAFF
        case 'dataps':
            include 'views/body/dataps/index.php';
            break;
        case 'tambah_dataps':
            include 'views/body/dataps/tambah.php';
            break;
        case 'edit_dataps':
            include 'views/body/dataps/ubah.php';
            break;

        // ADMIN
        case 'admin':
            include 'views/body/admin/index.php';
            break;
        case 'edit-admin':
            include 'views/body/admin/ubah.php';
            break;
    }
} else {
    echo '<meta http-equiv="refresh" content="0;url=index.php?page=dashboard" />';
}

require('views/main/footer.php');
?>

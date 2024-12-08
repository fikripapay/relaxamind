<?php
require('views/main/header.php');
require('config/database.php');

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'dashboard':
            include 'views/body/dashboard/index.php';
            break;

        case 'datates':
            include 'views/body/datates/index.php';
            break;

        case 'datausers':
            include 'views/body/datausers/index.php';
            break;
    }
} else {
    echo '<meta http-equiv="refresh" content="0;url=index.php?page=dashboard" />';
}

require('views/main/footer.php');
?>

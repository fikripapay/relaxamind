<?php
ob_start();
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username=strtoupper($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                Home
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php
                if(isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
            ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                MENUz
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=banner">
                    <i class="fa-solid fa-image"></i>
                    <span>Banner</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=sambutan">
                <i class="fa-solid fa-door-open"></i>
                    <span>Sambutan</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                USER
            </div>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=admin" >
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin</span>
                </a>
            </li>
            <?php
                } else {?>           
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=rekap">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Rekap Data</span></a>
                    </li>
                <?php
                }
            ?>
            

           
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div id="contentData">
                <div class="container-fluid">
            </div>
        </div>
</body>
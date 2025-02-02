<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('DashboardController') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PLN PT Argo</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Home Section -->
            <div class="sidebar-heading">Home</div>
            <li class="nav-item active">
                <a class="nav-link pb-0" href="<?= site_url('DashboardController'); ?>">
                    <i class="fa fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Master Data Section -->
            <div class="sidebar-heading">Master Data</div>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= site_url('UserController'); ?>">
                    <i class="fas fa-users"></i>
                    <span>Kelola User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= site_url('TarifListrikController'); ?>">
                    <i class="fas fa-bolt"></i>
                    <span>Kelola Tarif Listrik</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= site_url('PelangganController'); ?>">
                    <i class="fas fa-user"></i>
                    <span>Kelola Pelanggan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= site_url('TagihanController'); ?>">
                    <i class="fas fa-file-invoice"></i>
                    <span>Kelola Tagihan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= site_url('PembayaranController'); ?>">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Pembayaran</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Laporan Section -->
            <div class="sidebar-heading">Laporan</div>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= site_url('RiwayatController'); ?>">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Pembayaran</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Logout -->
            <div class="sidebar-heading">Logout</div>
            <li class="nav-item">
                <a class="nav-link pb-0 text-danger" href="<?= site_url('AuthController/logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
            
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
            <script src="<?= base_url('assets/js/sidebar.js'); ?>"></script>

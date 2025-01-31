<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>Selamat Datang, <?= $this->session->userdata('username'); ?></h2>
    <ul>
        <li><a href="<?= site_url('UserController') ?>">Kelola User</a></li>
        <li><a href="<?= site_url('TarifListrikController') ?>">Kelola Tarif Listrik</a></li>
        <li><a href="<?= site_url('PelangganController') ?>">Kelola Pelanggan</a></li>
        <li><a href="<?= site_url('TagihanController') ?>">Kelola Tagihan</a></li>
        <li><a href="<?= site_url('RiwayatController') ?>">Riwayat Pembayaran</a></li>
        <li><a href="<?= site_url('AuthController/logout') ?>">Logout</a></li>
    </ul>
</body>
</html>

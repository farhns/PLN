<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
</head>
<body>
    <h2>Tambah User</h2>

    <!-- Pesan sukses -->
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <!-- Pesan error -->
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <!-- <form action="<?= site_url('UserController/store') ?>" method="post"> -->
    <form action="http://localhost/PLN/index.php/UserController/store" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Hak Akses:</label>
        <input type="number" name="hak_akses" required><br>
        <button type="submit" style="cursor: pointer;">Simpan</button>
        <button onclick="window.history.back()" style="cursor: pointer;">Kembali</button>
    </form>
</body>
</html>

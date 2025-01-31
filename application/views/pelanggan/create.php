<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <h2>Tambah Pelanggan</h2>
    <!-- <form action="<?= site_url('PelangganController/store') ?>" method="post"> -->
    <form action="http://localhost/PLN/index.phpPelangganController/store" method="post">
        <label>ID Tarif Listrik:</label>
        <input type="number" name="tbTarifListrik_id" required><br>
        <label>Pelanggan ID:</label>
        <input type="text" name="pelanggan_id" required><br>
        <label>Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <button type="submit">Simpan</button>
        <button onclick="window.history.back()" style="cursor: pointer;">Kembali</button>
    </form>
</body>
</html>

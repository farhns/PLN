<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tagihan</title>
</head>
<body>
    <h2>Tambah Tagihan</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    
    <!-- <form action="<?= site_url('TagihanController/store') ?>" method="post"> -->
    <form action="http://localhost/PLN/index.php/TagihanController/store" method="post">
        <label>ID Pelanggan:</label>
        <input type="number" name="tbPelanggan_id" required><br>
        <label>Tahun Tagihan:</label>
        <input type="text" name="tahun_tagihan" required><br>
        <label>Bulan Tagihan:</label>
        <input type="number" name="bulan_tagihan" required><br>
        <label>Pemakaian (kWh):</label>
        <input type="number" name="pemakaian" required><br>
        <button type="submit">Simpan</button>
        <button onclick="window.history.back()" style="cursor: pointer;">Kembali</button>
    </form>
</body>
</html>

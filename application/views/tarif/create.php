<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tarif Listrik</title>
</head>
<body>
    <h2>Tambah Tarif Listrik</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <!-- <form action="<?= site_url('TarifListrikController/store') ?>" method="post"> -->
    <form action="http://localhost/PLN/index.php/TarifListrikController/store" method="post">
        <label>ID User:</label>
        <input type="number" name="tbUser_id" required><br>
        <label>Kode Tarif:</label>
        <input type="text" name="kdtarif" required><br>
        <label>Beban:</label>
        <input type="number" name="beban" required><br>
        <label>Tarif per kWh:</label>
        <input type="number" name="tarif_perkwh" required><br>
        <button type="submit">Simpan</button>
        <button onclick="window.history.back()" style="cursor: pointer;">Kembali</button>
    </form>
</body>
</html>

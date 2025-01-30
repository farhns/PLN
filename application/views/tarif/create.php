<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tarif Listrik</title>
</head>
<body>
    <h2>Tambah Tarif Listrik</h2>
    <form action="<?= site_url('TarifListrikController/store') ?>" method="post">
        <label>Kode Tarif:</label>
        <input type="text" name="kdtarif" required><br>
        <label>Beban:</label>
        <input type="number" name="beban" required><br>
        <label>Tarif per kWh:</label>
        <input type="number" name="tarif_perkwh" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

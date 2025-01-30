<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tagihan</title>
</head>
<body>
    <h2>Tambah Tagihan</h2>
    <form action="<?= site_url('TagihanController/store') ?>" method="post">
        <label>Tahun Tagihan:</label>
        <input type="text" name="tahun_tagihan" required><br>
        <label>Bulan Tagihan:</label>
        <input type="number" name="bulan_tagihan" required><br>
        <label>Pemakaian (kWh):</label>
        <input type="number" name="pemakaian" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

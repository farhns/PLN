<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h2>Tambah Pelanggan</h2>
    <form action="<?= site_url('PelangganController/store') ?>" method="post">
        <label>Pelanggan ID:</label>
        <input type="text" name="pelanggan_id" required><br>
        <label>Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

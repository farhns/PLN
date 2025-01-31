<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
</head>
<body>
    <h2>Edit Pelanggan</h2>

    <!-- <form action="<?= site_url('PelangganController/update/'.$pelanggan->id) ?>" method="post"> -->
    <form action="<?= 'http://localhost/PLN/index.php/PelangganController/update/'.$pelanggan->id ?>" method="post">
        <label>Pelanggan ID:</label>
        <input type="text" name="pelanggan_id" value="<?= $pelanggan->pelanggan_id ?>" required><br>
        <label>Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" value="<?= $pelanggan->nama_pelanggan ?>" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= $pelanggan->alamat ?>" required><br>
        <button type="submit">Update</button>
        <button onclick="window.history.back()" style="cursor: pointer;">Kembali</button>
    </form>
</body>
</html>

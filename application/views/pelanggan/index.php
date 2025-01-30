<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pelanggan</title>
</head>
<body>
    <h2>Data Pelanggan</h2>
    <a href="<?= site_url('PelangganController/create') ?>">Tambah Pelanggan</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Pelanggan ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pelanggan as $p): ?>
        <tr>
            <td><?= $p->id ?></td>
            <td><?= $p->pelanggan_id ?></td>
            <td><?= $p->nama_pelanggan ?></td>
            <td><?= $p->alamat ?></td>
            <td>
                <a href="<?= site_url('PelangganController/edit/'.$p->id) ?>">Edit</a> |
                <a href="<?= site_url('PelangganController/delete/'.$p->id) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Tagihan</title>
</head>
<body>
    <h2>Data Tagihan</h2>
    <a href="<?= site_url('TagihanController/create') ?>">Tambah Tagihan</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tahun</th>
            <th>Bulan</th>
            <th>Pemakaian</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($tagihan as $t): ?>
        <tr>
            <td><?= $t->id ?></td>
            <td><?= $t->tahun_tagihan ?></td>
            <td><?= $t->bulan_tagihan ?></td>
            <td><?= $t->pemakaian ?></td>
            <td>
                <a href="<?= site_url('TagihanController/edit/'.$t->id) ?>">Edit</a> |
                <a href="<?= site_url('TagihanController/delete/'.$t->id) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="<?= site_url('DashboardController') ?>" style="">
        Kembali ke Dashboard
    </a>
</body>
</html>

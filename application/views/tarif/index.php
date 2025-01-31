<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Tarif Listrik</title>
</head>
<body>
    <h2>Data Tarif Listrik</h2>
    <a href="<?= site_url('TarifListrikController/create') ?>">Tambah Tarif</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode Tarif</th>
            <th>Beban</th>
            <th>Tarif per kWh</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($tarif as $t): ?>
        <tr>
            <td><?= $t->id ?></td>
            <td><?= $t->kdtarif ?></td>
            <td><?= $t->beban ?></td>
            <td><?= $t->tarif_perkwh ?></td>
            <td>
                <a href="<?= site_url('TarifListrikController/edit/'.$t->id) ?>">Edit</a> |
                <a href="<?= site_url('TarifListrikController/delete/'.$t->id) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
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

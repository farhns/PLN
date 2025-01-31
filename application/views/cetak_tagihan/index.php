<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tagihan</title>
</head>
<body>
    <h2>Daftar Tagihan</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Pelanggan</th>
            <th>Tahun</th>
            <th>Bulan</th>
            <th>Pemakaian</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($tagihan as $t): ?>
        <tr>
            <td><?= $t->id ?></td>
            <td><?= $t->tbPelanggan_id ?></td>
            <td><?= $t->tahun_tagihan ?></td>
            <td><?= $t->bulan_tagihan ?></td>
            <td><?= $t->pemakaian ?></td>
            <td>
                <a href="<?= site_url('CetakTagihanController/cetak/'.$t->id) ?>">Lihat</a> | 
                <a href="<?= site_url('CetakTagihanController/cetak_pdf/'.$t->id) ?>">Cetak PDF</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pembayaran</title>
</head>
<body>
    <h2>Riwayat Pembayaran</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Pelanggan</th>
            <th>Tahun</th>
            <th>Bulan</th>
            <th>Pemakaian</th>
            <th>Status</th>
        </tr>
        <?php foreach ($riwayat as $r): ?>
        <tr>
            <td><?= $r->id ?></td>
            <td><?= $r->tbPelanggan_id ?></td>
            <td><?= $r->nama_pelanggan ?></td>
            <td><?= $r->tahun_tagihan ?></td>
            <td><?= $r->bulan_tagihan ?></td>
            <td><?= $r->pemakaian ?> kWh</td>
            <td style="color:green; font-weight:bold;"><?= $r->status ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="<?= site_url('DashboardController') ?>" style="">
        Kembali ke Dashboard
    </a>
</body>
</html>

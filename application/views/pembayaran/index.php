<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran Tagihan</title>
</head>
<body>
    <h2>Pembayaran Tagihan</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Pelanggan</th>
            <th>Tahun</th>
            <th>Bulan</th>
            <th>Pemakaian</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($tagihan as $t): ?>
        <tr>
            <td><?= $t->id ?></td>
            <td><?= $t->tbPelanggan_id ?></td>
            <td><?= $t->tahun_tagihan ?></td>
            <td><?= $t->bulan_tagihan ?></td>
            <td><?= $t->pemakaian ?> kWh</td>
            <td><?= $t->status ?></td>
            <td>
                <?php if ($t->status == 'Belum Lunas'): ?>
                    <a href="<?= site_url('PembayaranController/bayar/'.$t->id) ?>">Bayar</a>
                <?php else: ?>
                    Lunas
                <?php endif; ?>
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

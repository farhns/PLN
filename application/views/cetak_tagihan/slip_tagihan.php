<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Slip Tagihan</title>
</head>
<body>
    <h2>Slip Tagihan Listrik</h2>
    <table>
        <tr>
            <td>ID Tagihan</td>
            <td>: <?= $tagihan->id ?></td>
        </tr>
        <tr>
            <td>Pelanggan</td>
            <td>: <?= $tagihan->tbPelanggan_id ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>: <?= $tagihan->tahun_tagihan ?></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td>: <?= $tagihan->bulan_tagihan ?></td>
        </tr>
        <tr>
            <td>Pemakaian</td>
            <td>: <?= $tagihan->pemakaian ?> kWh</td>
        </tr>
    </table>

    <button onclick="window.print()">Cetak</button>
</body>
</html>

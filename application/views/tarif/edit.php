<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Tarif Listrik</title>
</head>
<body>
    <h2>Edit Tarif Listrik</h2>

    <!-- <form action="<?= site_url('TarifListrikController/update/'.$tarif->id) ?>" method="post"> -->
    <form action="<?= 'http://localhost/PLN/index.php/TarifListrikController/update/'.$tarif->id ?>" method="post">
        <label>Kode Tarif:</label>
        <input type="text" name="kdtarif" value="<?= $tarif->kdtarif ?>" required><br>
        <label>Beban:</label>
        <input type="number" name="beban" value="<?= $tarif->beban ?>" required><br>
        <label>Tarif per kWh:</label>
        <input type="number" name="tarif_perkwh" value="<?= $tarif->tarif_perkwh ?>" required><br>
        <button type="submit">Update</button>
        <button onclick="window.history.back()" style="cursor: pointer;">Kembali</button>
    </form>
</body>
</html>

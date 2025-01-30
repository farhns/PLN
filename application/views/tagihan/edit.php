<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Tagihan</title>
</head>
<body>
    <h2>Edit Tagihan</h2>
    
    <!-- <form action="<?= site_url('TagihanController/update/'.$tagihan->id) ?>" method="post"> -->
    <form action="<?= 'http://localhost/PLN/index.php/TagihanController/update/'.$tagihan->id ?>" method="post">
        <label>Tahun Tagihan:</label>
        <input type="text" name="tahun_tagihan" value="<?= $tagihan->tahun_tagihan ?>" required><br>
        <label>Bulan Tagihan:</label>
        <input type="number" name="bulan_tagihan" value="<?= $tagihan->bulan_tagihan ?>" required><br>
        <label>Pemakaian (kWh):</label>
        <input type="number" name="pemakaian" value="<?= $tagihan->pemakaian ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Tarif Listrik</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= 'http://localhost/PLN/index.php/TarifListrikController/update/'.$tarif->id ?>" method="post">
                <div class="form-group">
                    <label>Kode Tarif:</label>
                    <input type="text" name="kdtarif" value="<?= $tarif->kdtarif ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Beban:</label>
                    <input type="number" name="beban" value="<?= $tarif->beban ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Tarif per kWh:</label>
                    <input type="number" name="tarif_perkwh" value="<?= $tarif->tarif_perkwh ?>" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <button onclick="window.history.back()" class="btn btn-secondary">⬅ Kembali</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

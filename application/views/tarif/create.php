<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Tarif Listrik</h1>

    <div class="card shadow">
        <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= site_url('TarifListrikController/store') ?>" method="post">
                <div class="form-group">
                    <label>ID User:</label>
                    <input type="number" name="tbUser_id" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Kode Tarif:</label>
                    <input type="text" name="kdtarif" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Beban:</label>
                    <input type="number" name="beban" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Tarif per kWh:</label>
                    <input type="number" name="tarif_perkwh" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-check"></i> Simpan
                </button>
                <button onclick="window.history.back()" class="btn btn-secondary">
                    <i class="fas fa-xmark"></i> Kembali
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Tagihan</h1>

    <?php if ($this->session->flashdata('success')): ?>
        <p class="text-success"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p class="text-danger"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('Tagihan/store') ?>" method="post">
                <div class="form-group">
                    <label>ID Pelanggan:</label>
                    <input type="number" name="tbPelanggan_id" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Tahun Tagihan:</label>
                    <input type="text" name="tahun_tagihan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Bulan Tagihan:</label>
                    <input type="number" name="bulan_tagihan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Pemakaian (kWh):</label>
                    <input type="number" name="pemakaian" class="form-control" required>
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

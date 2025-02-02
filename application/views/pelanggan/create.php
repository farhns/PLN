<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Pelanggan</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('PelangganController/store') ?>" method="post">
                <?php if ($this->session->flashdata('success')): ?>
                    <p style="color:green"><?= $this->session->flashdata('success'); ?></p>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error')): ?>
                    <p style="color:red"><?= $this->session->flashdata('error'); ?></p>
                <?php endif; ?>

                <div class="form-group">
                    <label>ID Tarif Listrik:</label>
                    <input type="number" name="tbTarifListrik_id" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Pelanggan ID:</label>
                    <input type="text" name="pelanggan_id" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama Pelanggan:</label>
                    <input type="text" name="nama_pelanggan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" name="alamat" class="form-control" required>
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

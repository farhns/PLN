<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Pelanggan</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('Pelanggan/update/'.$pelanggan->id) ?>" method="post">
                <div class="form-group">
                    <label>Pelanggan ID:</label>
                    <input type="text" name="pelanggan_id" value="<?= $pelanggan->pelanggan_id ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama Pelanggan:</label>
                    <input type="text" name="nama_pelanggan" value="<?= $pelanggan->nama_pelanggan ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" name="alamat" value="<?= $pelanggan->alamat ?>" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-check"></i> Update
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

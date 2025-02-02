<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Tagihan</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('TagihanController/update/'.$tagihan->id) ?>" method="post">
                <div class="form-group">
                    <label>Tahun Tagihan:</label>
                    <input type="text" name="tahun_tagihan" value="<?= $tagihan->tahun_tagihan ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Bulan Tagihan:</label>
                    <input type="number" name="bulan_tagihan" value="<?= $tagihan->bulan_tagihan ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Pemakaian (kWh):</label>
                    <input type="number" name="pemakaian" value="<?= $tagihan->pemakaian ?>" class="form-control" required>
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

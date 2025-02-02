<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Pembayaran Tagihan</h1>

    <?php if ($this->session->flashdata('success')): ?>
        <p class="text-success"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pelanggan</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Pemakaian</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
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
                                <a href="<?= site_url('PembayaranController/bayar/'.$t->id) ?>" class="btn btn-secondary">Bayar</a>
                            <?php else: ?>
                                <button class="btn btn-primary" disabled>Lunas</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

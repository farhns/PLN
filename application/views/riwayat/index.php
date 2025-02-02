<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Riwayat Pembayaran</h1>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pelanggan</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Pemakaian</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($riwayat as $r): ?>
                    <tr>
                        <td><?= $r->id ?></td>
                        <td><?= $r->tbPelanggan_id ?></td>
                        <td><?= $r->nama_pelanggan ?></td>
                        <td><?= $r->tahun_tagihan ?></td>
                        <td><?= $r->bulan_tagihan ?></td>
                        <td><?= $r->pemakaian ?> kWh</td>
                        <td>
                            <!-- <span class="badge badge-success"><?= $r->status ?></span> -->
                            <button class="btn btn-primary" disabled <?= $r->status ?>>Lunas</button>
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

<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Tagihan</h1>

    <a href="<?= site_url('TagihanController/create') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-user-plus"></i> Tambah Tagihan
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tahun</th>
                    <th>Bulan</th>
                    <th>Pemakaian</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($tagihan as $t): ?>
                <tr>
                    <td><?= $t->id ?></td>
                    <td><?= $t->tahun_tagihan ?></td>
                    <td><?= $t->bulan_tagihan ?></td>
                    <td><?= $t->pemakaian ?></td>
                    <td>
                        <a href="<?= site_url('TagihanController/edit/'.$t->id) ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?= site_url('TagihanController/delete/'.$t->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>

<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Tarif Listrik</h1>

    <a href="<?= site_url('TarifListrikController/create') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-user-plus"></i> Tambah Tarif
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Kode Tarif</th>
                    <th>Beban</th>
                    <th>Tarif per kWh</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($tarif as $t): ?>
                <tr>
                    <td><?= $t->id ?></td>
                    <td><?= $t->kdtarif ?></td>
                    <td><?= $t->beban ?></td>
                    <td><?= $t->tarif_perkwh ?></td>
                    <td>
                        <a href="<?= site_url('TarifListrikController/edit/'.$t->id) ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?= site_url('TarifListrikController/delete/'.$t->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>

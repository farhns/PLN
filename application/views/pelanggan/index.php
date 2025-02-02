<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Data Pelanggan</h1>

    <a href="<?= site_url('PelangganController/create') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-user-plus"></i> Tambah Pelanggan
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Pelanggan ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($pelanggan as $p): ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= $p->pelanggan_id ?></td>
                    <td><?= $p->nama_pelanggan ?></td>
                    <td><?= $p->alamat ?></td>
                    <td>
                        <a href="<?= site_url('PelangganController/edit/'.$p->id) ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?= site_url('PelangganController/delete/'.$p->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</div> <!-- END CONTENT -->
</div> <!-- END CONTENT WRAPPER -->
</div> <!-- END WRAPPER -->
</body>
</html>

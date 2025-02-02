<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola User</h1>

    <a href="<?= site_url('UserController/create') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-user-plus"></i> Tambah User
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->hak_akses ?></td>
                    <td>
                        <a href="<?= site_url('UserController/edit/'.$user->id) ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?= site_url('UserController/delete/'.$user->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
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

<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('User/update/'.$user->id) ?>" method="post">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" value="<?= $user->username ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Hak Akses:</label>
                    <select name="hak_akses" class="form-control" required>
                        <option value="1" <?= $user->hak_akses == 1 ? 'selected' : '' ?>>Admin</option>
                        <option value="2" <?= $user->hak_akses == 2 ? 'selected' : '' ?>>Operator</option>
                        <option value="3" <?= $user->hak_akses == 3 ? 'selected' : '' ?>>Pelanggan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Password Baru (kosongkan jika tidak ingin diubah):</label>
                    <input type="password" name="password" class="form-control">
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

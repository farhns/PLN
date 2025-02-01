<?php $this->load->view('partials/sidebar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah User</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?= site_url('UserController/store') ?>" method="post">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Hak Akses:</label>
                    <select name="hak_akses" class="form-control" required>
                        <option value="1">Admin</option>
                        <option value="2">Operator</option>
                        <option value="3">Pelanggan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button onclick="window.history.back()" class="btn btn-secondary">⬅ Kembali</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

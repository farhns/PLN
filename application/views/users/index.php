<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
</head>
<body>
    <h2>Data User</h2>
    <a href="<?= site_url('UserController/create') ?>">Tambah User</a>
    <table border="1">
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
                <a href="<?= site_url('UserController/edit/'.$user->id) ?>">Edit</a> |
                <a href="<?= site_url('UserController/delete/'.$user->id) ?>" onclick="return confirm('Hapus user?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

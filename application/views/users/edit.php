<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="<?= site_url('UserController/update/'.$user->id) ?>" method="post">
        <label>Username:</label>
        <input type="text" name="username" value="<?= $user->username ?>" required><br>
        <label>Password (Kosongkan jika tidak ingin diubah):</label>
        <input type="password" name="password"><br>
        <label>Hak Akses:</label>
        <input type="number" name="hak_akses" value="<?= $user->hak_akses ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

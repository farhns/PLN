<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title >Login Admin</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
    <!-- <link rel="stylesheet" type="text/css" href="PLN/assets/css/style.css"> -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <p class="error-message"><?= $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <form action="<?= site_url('AuthController/process_login') ?>" method="post" class="login-form">
            <label>Username :</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

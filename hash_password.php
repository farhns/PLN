<?php
$password = password_hash("admin123", PASSWORD_DEFAULT);
echo "Password Hash: " . $password;
?>

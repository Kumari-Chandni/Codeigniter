<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
</head>
<body>
<h1>Sign In</h1>
    <?php if ($this->session->flashdata('error')): ?>
        <div style="color: red;"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>
    <form method="post" action="signin">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Sign In</button>
    </form>
</body>
</html>
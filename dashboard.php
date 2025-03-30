<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<h2>Selamat datang di Dashboard!</h2>

<form method="POST">
    <button type="submit" name="logout">Logout</button>
</form>

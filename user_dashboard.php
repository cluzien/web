<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit;
}
?>

<h1>Selamat datang di web testing</h1>
<a href="logout.php">Logout</a>

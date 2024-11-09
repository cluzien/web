<?php
$conn = new mysqli('localhost', 'root', '', 'web');
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>

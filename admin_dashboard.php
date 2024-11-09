<?php include 'db_connect.php'; ?>
<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT * FROM users");
?>

<h1>Dashboard Admin</h1>
<a href="add_user.php">Tambah User</a> | <a href="logout.php">Logout</a>
<table border="1">
    <tr>
        <th>ID</th><th>Username</th><th>Email</th><th>Role</th><th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['role'] ?></td>
            <td>
                <a href="edit_user.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="delete_user.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

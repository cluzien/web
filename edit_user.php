<?php include 'db_connect.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<form method="POST">
    <input type="text" name="username" value="<?= $user['username'] ?>" required><br>
    <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <button type="submit">Update</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET username='$username', email='$email' WHERE id=$id");
    header("Location: admin_dashboard.php");
}
?>

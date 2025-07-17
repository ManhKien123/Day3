<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "demo1";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    echo "Invalid account ID.";
    exit;
}

$result = $conn->query("SELECT * FROM accounts WHERE id=$id");
if (!$result || $result->num_rows == 0) {
    echo "Account not found.";
    exit;
}
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Account</title>
</head>
<body>
    <h1>Update Account</h1>
    <form action="processUpdateAccount.php" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required><br>
        <label>Full Name:</label>
        <input type="text" name="fullname" value="<?= htmlspecialchars($row['fullname']) ?>" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?= htmlspecialchars($row['phone']) ?>" required><br>
        <input type="submit" value="Update">
    </form>
    <a href="viewAccounts.php">Back to Account List</a>
</body>
</html>
<?php
$conn->close();
?>

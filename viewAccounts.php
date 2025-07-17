<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "demo1";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT id, fullname, pwd, FROM accounts");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account List</title>
</head>
<body>
    <h1>Account List</h1>
    <a href="createAccount.php">Create Account</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Last Login</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['fullname']) ?></td>
            <td><?= htmlspecialchars($row['phone']) ?></td>
            <td><?= $row['last_login'] ? date('d/M/Y', strtotime($row['last_login'])) : '' ?></td>
            <td>
                <a href="updateAccount.php?id=<?= urlencode($row['id']) ?>">Edit</a> |
                <a href="deleteAccount.php?id=<?= urlencode($row['id']) ?>" onclick="return confirm('Delete this account?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
<body>
    <div class="container">
        
    </div>
</body>
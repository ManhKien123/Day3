<?php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mydb";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Account</title>
</head>
<body>
    <h1>Create New Account</h1>
    <form action="processNewAccount.php" method="post">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Full Name:</label>
        <input type="text" name="fullname" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br>
        <label>Password:</label>
        <input type="password" name="pwd" required><br>
        <input type="submit" value="Create">
    </form>
    <a href="viewAccounts.php">Back to Account List</a>
</body>
</html>
<?php
$conn->close();
?>
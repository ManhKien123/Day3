<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account List</title>
</head>
<body>
    <h1>Account List</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Full name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'ConnectDB.php';
            $conn = connectDb();
            $sql = "SELECT id, email, fullname, phone FROM accounts";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_array(MYSQLI_NUM)) {
                    ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo htmlspecialchars($row[1]); ?></td>
                        <td><?php echo htmlspecialchars($row[2]); ?></td>
                        <td><?php echo htmlspecialchars($row[3]); ?></td>
                        <td>
                            <a href="updateAccount.php?id=<?php echo $row[0]; ?>">Edit</a> |
                            <a href="deleteAccount.php?id=<?php echo $row[0]; ?>" onclick="return confirm('Are you sure you want to delete this account?');">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                $result->free_result();
            } else {
                ?>
                <tr>
                    <td colspan="5">No accounts</td>
                </tr>
                <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h3><a href="createProduct.php">Create New Product</a></h3>
    <h1>Product List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connectDb.php';

            $conn = connectDb();
            $sql = "SELECT id, name, price, stock_quantity, image FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_array(MYSQLI_NUM)) {
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "<td><img src='{$row[4]}' width='100'></td>";
                    echo "<td><a href='updateProduct.php?id={$row[0]}'>Update</a> | 
                              <a href='deleteProduct.php?id={$row[0]}'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No Products</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>

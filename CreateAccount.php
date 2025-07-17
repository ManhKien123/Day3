<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <h1>Create Account</h1>
    <form action="CreateAccount.php" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
        </div>

        <div>
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd" required><br>
        </div>

        <div>
            <label for="comfirm">Confirm Password:</label>
            <input type="password" id="comfirm" name="comfirm" required><br>
        </div>

        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required><br>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br>
        </div>

        <div>
            <input type="submit" value="Create Account">
        </div>
    </form>
</body>
</html>

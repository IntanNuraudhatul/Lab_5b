<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>User Login</h2>
    <form action="login_process.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
    <p><a href="register.php">Register</a> here if you have not.</p>
</body>
</html>

<?php

include 'session_check.php'; 

$conn = new mysqli("localhost", "root", "", "Lab_5b");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['matric'])) {
    $matric = $_GET['matric'];
    $result = $conn->query("SELECT * FROM users WHERE matric = '$matric'");
    $row = $result->fetch_assoc();
} else {
    header("Location: display.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form action="update.php" method="POST">

        <label for="matric">Matric:</label>
        <input type="text" name="matric" value="<?php echo $row['matric']; ?>"><br>

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="role">Access Level:</label>
        <select name="role" required>
            <option value="Student" <?php echo $row['role'] == 'Student' ? 'selected' : ''; ?>>Student</option>
            <option value="Lecturer" <?php echo $row['role'] == 'Lecturer' ? 'selected' : ''; ?>>Lecturer</option>
        </select><br>

        <button type="submit">Update</button><a href="display.php">cancel</a>
    </form>
</body>
</html>

<?php
$conn->close();
?>

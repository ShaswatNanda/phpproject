<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Add your registration logic here (save to database)
    
    // Redirect to login page after registration
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Account</title>
    <link rel="stylesheet" href="registerstyle.css">
</head>
<body>
    <div class="container">
        <h2>Create New Account</h2>
        <form method="POST" action="">
            <div>
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Create Account</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Replace with your actual authentication logic (database check)
    if (!empty($user_id) && !empty($password)) {
        $_SESSION['user_id'] = $user_id; // Save user ID in session
        header("Location: dashboard.php"); // Redirect to a dashboard page
        exit();
    } else {
        $error = "Invalid User ID or Password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="registerstyle.css">
    
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?= htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div>
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div>
            <a href="reset_password.php">Forget Password?</a>
        </div>
        <div>
            <a href="register.php">Create New Account</a>
        </div>
    </div>
</body>
</html>

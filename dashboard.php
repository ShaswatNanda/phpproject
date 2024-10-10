<?php
session_start();

// Sample user data (in a real application, this would be fetched from a database)
$user = [
    'username' => 'john_doe',
    'contact_number' => '123-456-7890',
    'email' => 'john@example.com',
    'dob' => '1990-01-01',
    'gender' => 'Male',
    'profile_photo' => 'profile.jpg' // Path to profile photo
];

// If user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="dashboard-container">
        <h2>User Dashboard</h2>
        <div class="profile-info">
            <img src="<?php echo $user['profile_photo']; ?>" alt="Profile Photo" class="profile-photo">
            <h3><?php echo htmlspecialchars($user['username']); ?></h3>
            <p><strong>Contact Number:</strong> <?php echo htmlspecialchars($user['contact_number']); ?></p>
            <p><strong>Email ID:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($user['dob']); ?></p>
            <p><strong>Gender:</strong> <?php echo htmlspecialchars($user['gender']); ?></p>
        </div>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
    </header>
    
    <main>
        <section class="dashboard-content">
            <h2>Your Account</h2>
            <p>Username: <?php echo $_SESSION['username']; ?></p>
            <p>Email: <?php
                // Fetch user email from the database
                $conn = new mysqli('localhost', 'root', '', 'pet_sitting_service');
                $user_id = $_SESSION['user_id'];
                $result = $conn->query("SELECT email FROM users WHERE id = '$user_id'");
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row['email'];
                }
                $conn->close();
            ?></p>
        </section>

        <section class="dashboard-links">
            <h2>Actions</h2>
            <ul>
                <li><a href="view-bookings.php">View Your Bookings</a></li>
                <li><a href="edit-profile.php">Edit Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </section>
    </main>
</body>
</html>

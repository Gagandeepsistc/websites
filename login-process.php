<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_sitting_service";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$pass = $_POST['password'];

// Fetch the user from the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verify the password (if you're using plain text passwords)
    if ($pass === $row['password']) {
        // Successful login
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        // Redirect to the index page
        header('Location: index.php');
        exit();
    } else {
        // Invalid password
        echo "Invalid password!";
    }
} else {
    // User not found
    echo "No user found with this email!";
}

$conn->close();
?>

<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "pet_sitting_service"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$message = $_POST['message'];

// Prepare SQL query to insert feedback into the database
$sql = "INSERT INTO feedback (user_name, user_email, message) 
        VALUES ('$user_name', '$user_email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

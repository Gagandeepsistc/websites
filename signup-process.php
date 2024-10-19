<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Check if the username or email already exists
$sql_check = "SELECT * FROM users WHERE username = '$user' OR email = '$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    // If the username or email already exists
    echo "Error: Username or Email already exists!";
} else {
    // If the username and email are unique, proceed with the insertion
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

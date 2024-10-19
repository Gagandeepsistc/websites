<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_sitting_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$service_type = $_POST['service_type'];
$customer_name = $_POST['name'];
$pet_name = $_POST['pet_name'];
$date_of_service = $_POST['date'];
$time_of_service = $_POST['time'];
$pet_sitter_id = $_POST['pet_sitter_id']; // Get the selected pet sitter

// Prepare SQL query to insert booking data into the database
$sql = "INSERT INTO bookings (service_type, customer_name, pet_name, date_of_service, time_of_service, pet_sitter_id) 
        VALUES ('$service_type', '$customer_name', '$pet_name', '$date_of_service', '$time_of_service', '$pet_sitter_id')";

if ($conn->query($sql) === TRUE) {
    echo "Booking confirmed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
